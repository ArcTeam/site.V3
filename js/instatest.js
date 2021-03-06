
instagramLoadDashboard()

function instagramLoadDashboard(){
  code = '4209263315.9bb57b2.a1220e62e7764389b63b905bd519c824'
  ts = Math.round((new Date()).getTime() / 1000);
  url = 'https://api.instagram.com/v1/users/self/media/recent?count=30&min_timestamp=0&max_timestamp='+ts+'&access_token='+code;
  instagramLoadMediaPage(url, function(){
    galleryHTML = instagramLoadGallery(instagramData);
    console.log(galleryHTML);
  });
};

function instagramLoadMediaPage(url, callback){
  $.ajax({
    url : url,
    dataType : 'jsonp',
    cache : false,
    success:  function(response){
      console.log(response);
      if(response.code == '400'){
        alert(response.error_message);
        return false;
      }
      if(response.pagination.next_url !== undefined) {
        instagramData = instagramData.concat(response.data);
        return instagramLoadMediaPage(response.pagination.next_url,callback);
      }
      instagramData = instagramData.concat(response.data);
      callback.apply();
    }
  });
};

function instagramLoadGallery(images){
  galleryHTML ='<ul>';
  for(var i=0;i<images.length;i++){
    galleryHTML += '<li><img src="'+images[i].images.thumbnail.url+'" width="120" id="instagram-'+images[i].id+' data-type="instagram" data-source="'+images[i].images.standard_resolution.url+'" class="image"/></li>';
  }
  galleryHTML +='</ul>';
  return galleryHTML;
};
