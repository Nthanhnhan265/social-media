
document.querySelectorAll(".post-cmt").forEach((e) => {
    const MAX_OF_CMT = 3;
    const user_avatar = document.querySelector('div.user-img > img');
    const fullname = document.querySelector('span#fullname').getAttribute('data-value');

    const today = new Date();
    const formattedDate = today.getHours().toString().padStart(2, '0') + ':' +
        today.getMinutes().toString().padStart(2, '0') + ' ' +
        (today.getMonth() + 1).toString().padStart(2, '0') + '/' +
        today.getDate().toString().padStart(2, '0') + '/' +
        today.getFullYear();

    const button = e.querySelector(".showmore");
    const frm = e.querySelector('form');
    const commentBox = e.querySelector('.comment');

    if (frm) {
        frm.addEventListener('submit', (e) => {
            e.preventDefault();
            const frmD = new FormData(frm);
            let content = "";
            let _token = "";
            const cmtId = Date.now().toString();

            let imageCount = 0;
            let videoCount = 0;
            let totalMedia = 0;

            for (const [name, value] of frmD.entries()) {
                if (value instanceof File && value.size > 0) {
                    if (name == "imgFileSelected[]" && value.type.startsWith('image/')) {
                        totalMedia++;
                    } else if (name == "vdFileSelected[]" && value.type.startsWith('video/')) {
                        totalMedia++;
                    }
                }
            }

            for (const [name, value] of frmD.entries()) {
                if (name == "content") {
                    content = value;
                } else if (name == "_token") {
                    _token = value;
                }
            }

            // Create and append the comment element
            const liOfComment = document.createElement('li');
            liOfComment.className = "showComment"; 
             liOfComment.innerHTML = `
                    <div class="comet-avatar" >
                        <div class="comment-avatar" style="width:45px;height:45px;overflow:hidden;border-radius:50%">
                            <img src="${user_avatar.src}" style="width:100%;height: 100%" alt="err">
                        </div>
                    </div>
                    <div class="we-comment p-3">
                        <div class="coment-head">
                            <h5><a href="{{ url('time-line') }}" title="">${fullname}</a></h5>
                            <span>${formattedDate}</span>
                        </div>
                        <p>${content}</p>
                        <div class="img-vid mt-3 row"></div>
                    </div> `
            commentBox.appendChild(liOfComment);
            divWe_comment =liOfComment.querySelector('.we-comment')
            divWe_comment.classList.add('newcomment');
            divWe_comment.style = "background-color:#fbfbfb; border-radius: 10px !important; border: 1px solid #cac4c4"
            const imgVidContainer = liOfComment.querySelector('.img-vid');
            frm.reset() ;
            // Load images first
            let imageLoadPromises = [];
            for (const [name, value] of frmD.entries()) {
                if (value instanceof File && name == "imgFileSelected[]" && value.size > 0 && value.type.startsWith('image/')) {
                    const reader = new FileReader();
                    const promise = new Promise((resolve, reject) => {
                        reader.onload = (e) => {
                            const dataImg = e.target.result;
                            const a_fancy = document.createElement('a');
                            a_fancy.classList.add(imageCount <= 2 ? "col-4" : "d-none", "p-1");
                            if (imageCount == 2) {
                                a_fancy.classList.add("position-relative");
                            }
                            a_fancy.setAttribute("href", dataImg);
                            a_fancy.setAttribute("data-fancybox", "gallery" + cmtId);

                            const img = document.createElement('img');
                            img.classList.add("d-block");
                            img.setAttribute("src", dataImg);
                            img.setAttribute("alt", "err");

                            a_fancy.appendChild(img);

                            if (imageCount == 2 && totalMedia - 3 != 0) {
                                const divCover = document.createElement('div');
                                divCover.style = 'position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content:center;align-items:center;font-size:2rem';
                                divCover.textContent = `+${totalMedia - 2}`;
                                a_fancy.appendChild(divCover);
                            }

                            imgVidContainer.appendChild(a_fancy);
                            imageCount++;
                            resolve();
                        };
                        reader.readAsDataURL(value);
                    });
                    imageLoadPromises.push(promise);
                }
            }

            // Once all images are loaded, load videos
            Promise.all(imageLoadPromises).then(() => {
                for (const [name, value] of frmD.entries()) {
                    if (value instanceof File && name == "vdFileSelected[]" && value.size > 0 && value.type.startsWith('video/')) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            const dataVid = e.target.result;

                            const a_fancy = document.createElement('a');
                            a_fancy.classList.add(videoCount <= 2 && videoCount + imageCount < 3 ? "col-4" : "d-none", "p-1");
                            if (videoCount == 2) {
                                a_fancy.classList.add("position-relative");
                            }
                            a_fancy.setAttribute("href", dataVid);
                            a_fancy.setAttribute("data-fancybox", "gallery" + cmtId);
                            a_fancy.style = 'max-height:50rem;display:block;height: 100%;';

                            const vid = document.createElement('video');
                            const src = document.createElement('source');

                            vid.classList.add("d-block");
                            vid.controls = true;
                            vid.style = "height:100%;width:100%";
                            src.setAttribute("src", dataVid);
                            src.setAttribute("type","video/mp4")
                            src.setAttribute("alt", "err");

                            vid.append(src)
                            a_fancy.appendChild(vid);

                            console.log(videoCount)
                            if (videoCount == 2 && totalMedia - 3 != 0) {
                                const divCover = document.createElement('div');
                                divCover.style = 'position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content:center;align-items:center;font-size:2rem';
                                divCover.textContent = `+${totalMedia - 2}`;
                                a_fancy.appendChild(divCover);
                            }

                            imgVidContainer.appendChild(a_fancy);
              
                            
                            videoCount++;
                        };
                        reader.readAsDataURL(value);
                    }
                }
            });

            // Send data to the server
            const url = "comment";
            const data = {
                method: 'POST',
                body: frmD,
                headers: {
                    'X-CSRF-TOKEN': _token
                }
            };

            fetch(url, data)
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => {
                    throw new Error("error : "+error)
                });
        });
       
    }

    if (button) {
        button.addEventListener("click", (event) => {
            const comments = e.querySelectorAll(".hideComment");
            if (comments) {
                const countOfLoops = comments.length >= MAX_OF_CMT ? MAX_OF_CMT : comments.length;
                for (let index = 0; index < countOfLoops; index++) {
                    comments[index].className = "showComment";
                }
                if (countOfLoops < MAX_OF_CMT) {
                    event.target.style.display = "none";
                }
            }
        });
    }
});

window.addEventListener('beforeunload', (e)=>{
    // Kiểm tra URL hiện tại
    var currentUrl = window.location.href;
    var specificUrl = "read-notification"; // Thay bằng URL cụ thể của bạn

    this.alert('ok')
    // Nếu URL hiện tại khớp với URL cụ thể
    if (currentUrl === specificUrl) {
        // Đặt URL của trang newsfeed
        var newsfeedUrl = "newsfeed"; // Thay bằng URL trang newsfeed của bạn

        // Điều hướng người dùng về trang newsfeed
        // window.location.href = newsfeedUrl;

        
    }
})
    const showmoreBtns = document.querySelectorAll('.long-text'); 
    console.log(showmoreBtns)
    showmoreBtns.forEach((element)=>{ 
        const btnshowmore = element.querySelector('.readmore-btn').addEventListener('click',(e)=> { 
            console.log('print');
            e.target.style.display = 'none'; 
            element.querySelector('.readless-btn').style = 'inline'; 
            element.querySelector('.full').style.display = 'inline'
            element.querySelector('.short').style.display = 'none'
        }) 
        element.querySelector('.readless-btn').addEventListener('click',(e)=> { 
            e.target.style.display = 'none'; 
            element.querySelector('.readmore-btn').style = 'none'; 
            element.querySelector('.full').style.display = 'none'
            element.querySelector('.short').style.display = 'inline'
        }) 
    }) 

   
