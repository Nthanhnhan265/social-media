/*
    handle when users click more comment
*/
const commentInPost = document.querySelectorAll(".post-cmt");
const MAX_OF_CMT = 3;
const user_avatar = document.querySelector('div.user-img > img')
const fullname = document.querySelector('span#fullname').getAttribute('data-value')

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
var h = String(today.getHours()).padStart(2, '0');
var m = String(today.getMinutes()).padStart(2, '0');
today = h + ':' + m + ' ' + mm + '/' + dd + '/' + yyyy;


commentInPost.forEach((e) => {
     //find and set event for showmore comment button 
     const button =  e.querySelector(".showmore"); 
     const frm = e.querySelector('form')
     const commentBox = e.querySelector('.comment'); 

     if (frm) { 
         frm.addEventListener('submit',(e)=>{
             e.preventDefault()  
             //formData object stores information of form 
            const frmD = new FormData(frm)  
            //
            let content = "" 
            const images = []
            const videos = []
            const json = {
                "imgFileSelected[]": [], 
                "vdFileSelected[]": [], 
            }
            var videoCount = 0 ; 
            var imageCount = 0; 
            for (const [name,value] of frmD.entries()) { 
                if (value instanceof File && name == "imgFileSelected[]" && value.size > 0 && value.type.startsWith('image/')) { 
                    const reader = new FileReader();
                    reader.onload = (e)=> { 
                        const dataImg = e.target.result 
                        //create  a tag of fancy box 
                        const a_fancy = document.createElement('a')
                        a.classList.addClass = imageCount<3 ? "col-4 p-1" : "d-none"
                        a.classList.addClass = imageCount==2 ? "position-relative" : ""
                        a.setAtributes["href"] = dataImg 
                        a.setAtributes["data-fancybox"] = "gallery"
                        json[name].push()
                    }
                    reader.readAsDataURL(value)

                    imageCount++; 
                }else if(value instanceof File && name == "vdFileSelected[]" &&  value.size > 0   && value.type.startsWith('video/')) { 
                    const reader = new FileReader();
                    reader.onload= (e)=>{ 
                        json[name].push(e.currentTarget.result)
                        
                    }
                    reader.readAsDataURL(value)
                    videoCount++; 
                } else {
                    json[name] = value
                }
            }
            console.log(json)
       
            //push comment to post (front end)
            const liOfComment = document.createElement('li')
            liOfComment.innerHTML = `
            <li class="showComment">
                <div class="comet-avatar">
                <div class="comment-avatar" style="width:45px;height:45px;overflow:hidden;border-radius:50%">
                    <img src="${user_avatar.src}" alt="err">
                </div>
                </div>
                <div class="we-comment">
                    <div class="coment-head">
                        <h5><a href="{{ url('time-line') }}" title="">${fullname}</a></h5>
                        <span>${today}</span>
                    </div>
                    <p>
                        ${json["content"]}
                    </p>
                    <div class="img-vid mt-3">
                      
                       
                    </div>
                </div>
            </li>`
            commentBox.append(liOfComment)

            //send data to server 
            // const url = "comment" 
            const url = "" 
            const data = { 
                method: 'POST',
                body: frmD, 
                header: { 
                     'X-CSRF-TOKEN' : json["_token"]
                }
            }

            fetch(url,data)
            .then(response=> response.json)
            .then(data=> console.log(data))
            .catch(error=> console.error("error: ",error)) 
         })
     }  
     if (button) { 
        button.addEventListener("click", (event) => {
            comments = e.querySelectorAll(".hideComment");
            
            if (comments) {
                countOfLoops = comments.length >= MAX_OF_CMT ? MAX_OF_CMT : comments.length;
                for (let index = 0; index < countOfLoops; index++) {
                    comments[index].className = "showComment";
                }
                if (countOfLoops < MAX_OF_CMT) { 
                    event.target.style.display = "none"
                }
            }  
        });
     }

});


function getImageAndVideoAsString(images,videos) { 

    '<div class="row">'

    //duyet mang anh 
    for (let index = 0; index < images.length; index++) {
        <a href="" class="$loop->index<3? 'col-4 p-1': 'd-none'}} {{$loop->index == 2 ? 'position-relative': ''}}" data-fancybox="gallery{{$commenter->comment_id}}{{$commenter->post_id_fk}}">
        <img src="{{asset('storage/images/'.$img->url)}}" alt="failed to display" class="d-block" />
        @if($loop->index == 2 && $loop->count - 3!=0)
        <div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
            +{{$totalMedia - 2}}
        </div>
        @endif
    </a>
        
    }

    //duyet mang video



    '</div>'

  

    @if(!empty($commenter->video) && count($commenter->video) !=0 )
    @foreach ($commenter->video as $video)
    <a href="{{asset('storage/videos/'.$video->url)}}" data-fancybox="gallery{{$commenter->id}}" style="max-height:50rem" class="{{
                                                        count($commenter->image)>3 || $loop->iteration + count($commenter->image) > 3?'d-none':'col-3 p-1'}}{{
                                                        count($commenter->image)>3 || $loop->iteration + count($commenter->image) == 3?' position-relative':''}}" style="display:block;height: 100%">
        <video controls style="height:100%;width:100%" src="{{asset('storage/videos/'.$video->url)}}"></video>
        @if(count($commenter->image)>3 || $loop->iteration + count($commenter->image) == 3)
        <div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
            +{{$totalMedia - 2}}
        </div>
        @endif
    </a>
    @endforeach
    @endif

}

/*
    Handle when user clicks Post button to comment 

*/






