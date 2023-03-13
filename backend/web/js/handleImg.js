var imgUpload = document.getElementById('upload_imgs'),
    imgPreview = document.getElementById('img_preview'),
    imgUploadForm = document.getElementById('img-upload-form'),
    cancelBtn = document.getElementById('cancel_btn'),
    imgList = document.getElementById('img_list'),
    totalFiles,
    previewTitle,
    previewTitleText,
    img;

function previewImgs(event) {
  totalFiles = imgUpload.files.length;

  if (!!totalFiles) {
    imgPreview.classList.remove('quote-imgs-thumbs--hidden');
    previewTitle = document.createElement('p');
    previewTitle.classList.add('fw-bold');
    previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
    previewTitle.appendChild(previewTitleText);
    imgPreview.appendChild(previewTitle);
    cancelBtn.style.display = 'inline-block';
  }

  for (var i = 0; i < totalFiles; i++) {
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    imgPreview.appendChild(img);
  }
}

function clearPreview() {
  imgPreview.innerHTML = '';
  imgPreview.classList.add('quote-imgs-thumbs--hidden');
  cancelBtn.style.display = 'none';
  imgUpload.value = '';
}

function addImageToList(imageId, imageUrl) {
  var imgContainer = document.createElement('div');
  imgContainer.classList.add('mb-3');
  imgContainer.innerHTML = '<img src="' + imageUrl + '" class="img-thumbnail">' +
                            '<button type="button" class="btn btn-danger btn-sm ms-3 remove-img" data-id="' + imageId + '">X</button>';
  imgList.appendChild(imgContainer);
}

function removeImage(event) {
  var imageId = event.target.getAttribute('data-id');
  // Send a request to remove the image from the database using AJAX
  // If the request is successful, remove the image from the list
  event.target.parentNode.remove();
}

cancelBtn.addEventListener('click', clearPreview);
imgUpload.addEventListener('change', previewImgs);
imgList.addEventListener('click', function(event) {
  if (event.target.classList.contains('remove-img')) {
    removeImage(event);
  }
});
