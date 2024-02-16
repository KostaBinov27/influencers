// jQuery( document ).ready(function($) {
    
//     $('.loading').show();
//     var content = '';
//     var allPosts = '';
//     var postsContent = '';

//     $.ajax({
//         type:"GET", 
//         cache: false,
//         url: "https://dummyjson.com/posts?limit=150",
//         success: function(data) {
//                 allPosts = data.posts;
//             },
//         error: function(jqXHR, textStatus, errorThrown) {
//                 console.log('Get posts Error: '+jqXHR.status);
//             }, 
//         dataType: "json"
//     });

//     function getUserData(id) {
//         postsContent = '';
//         const resultPosts = allPosts.filter(item => item.userId == id);
        
//         $.each( resultPosts, function( key, post ){
//             var tags = '';
//             $.each( post.tags, function( key, tag ){
//                 tags += `<li>${tag}</li>`;
//             });
//             postsContent += `<div class="col-lg-6">
//                                 <div class="singlePostContainer border">
//                                     <h4>${post.title}</h4>
//                                     <p>${post.body}</p>
//                                     <div class="footerBlock">
//                                         <div class="row">
//                                             <div class="col-lg-9">
//                                                 <ul>${tags}</ul>
//                                             </div>
//                                             <div class="col-lg-3">
//                                                 <i class="fa fa-regular fa-heart"></i>
//                                                 ${post.reactions}
//                                             </div>
//                                         </div>
//                                     </div>
//                                 </div>
//                             </div>`;
//         });
//         $("#postsContainer").html(postsContent);

//         console.log(resultPosts);
//         $('.loading').show();
//         $.ajax({
//             type:"GET", 
//             cache: false,
//             url: "https://dummyjson.com/users/"+id,
//             success: function(data) {
//                     $(".profilePicSingleProfile img").attr('src', data.image);
//                     $(".profile-usertitle-job").html(data.email);
//                     $(".profile-usertitle-name").html(data.firstName+' '+data.lastName);
//                     $(".aboutName").html(data.firstName+' '+data.lastName);
//                     $(".profile-stat-title-heigh").html(data.height);
//                     $(".profile-stat-title-blood").html(data.bloodGroup);
//                     $(".profile-stat-title-age").html(data.age);
//                     $(".addressAbout").html(data.address.address);
//                     $(".cityAbout").html(data.address.city);
//                     $(".postCodeAbout").html(data.address.postalCode);
//                     $(".stateAbout").html(data.address.state);
//                     $(".phoneAbout").html(data.phone);
//                     $(".birthdateAbout").html(data.birthDate);
//                     $(".profile-desc-link a").html(data.domain);
//                     $(".profile-desc-link a").attr('href', 'https://'+data.domain);

//                     $(".nameAboutC").html(data.company.name);
//                     $(".addressAboutC").html(data.company.address.address);
//                     $(".cityAboutC").html(data.company.address.city);
//                     $(".postCodeAboutC").html(data.company.address.postalCode);
//                     $(".stateAboutC").html(data.address.state);
//                     $(".titleAboutC").html(data.company.title);
//                     $(".departmentAboutC").html(data.company.department);

//                 },
//             complete: function(){
//                     $('.loading').hide();
//                     $('#userDetailsModal').modal('show');
//                 },
//             error: function(jqXHR, textStatus, errorThrown) {
//                     alert(jqXHR.status);
//                 }, 
//             dataType: "json"
//         });
//     }


//     $.ajax({
//         type:"GET", 
//         cache: false,
//         url: "https://dummyjson.com/users",
//         success: function(data) {
//                 $.each( data.users, function( key, user ){
//                     content += `<div class="card p-3">
//                                     <div class="d-flex align-items-center border">
//                                         <div class="image"> <img src="${user.image}" alt="${user.firstName}" class="rounded bg-img" width="155"> </div>
//                                         <div class="ml-3 w-100">
//                                             <h4 class="mb-0 mt-0 name">${user.firstName} ${user.lastName}</h4> <span>Age: ${user.age}</span>
//                                             <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
//                                                 <div class="d-flex flex-column"> <span class="articles">Blood Group</span> <span class="number1">${user.bloodGroup}</span> </div>
//                                                 <div class="d-flex flex-column"> <span class="followers">Height</span> <span class="number2">${user.height}cm</span> </div>
//                                                 <div class="d-flex flex-column"> <span class="rating">Weight</span> <span class="number3">${user.weight}kg</span> </div>
//                                             </div>
//                                             <div class="button mt-2 d-flex flex-row align-items-center"><button user-id="${user.id}" class="btn btn-sm btn-primary w-100 ml-2 more-details">More Details</button></div>
//                                         </div>
//                                     </div>
//                                 </div>`
//                 });
//                 $("#appContent").html(content);
//             },
//         complete: function(){
//                 $('.loading').hide();
//             },
//         error: function(jqXHR, textStatus, errorThrown) {
//                 alert(jqXHR.status);
//             }, 
//         dataType: "json"
//     });

//     $(document).on('click', '.more-details', function(){
//         var userId = $(this).attr('user-id');
//         getUserData(userId);
//     });
    
//     $(document).on('click', '.close', function(){
//         $('#userDetailsModal').modal('hide');
//     });
// });