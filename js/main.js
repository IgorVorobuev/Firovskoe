window.onload = () => {
	const uploadFile = document.getElementById("file");
	const uploadBtn = document.getElementById("upload_btn");
	const uploadText = document.getElementById("upload_text");

	uploadBtn.addEventListener("click", function(){
		uploadFile.click();
	});

	uploadFile.addEventListener("change", function(){
		if (uploadFile.value) {
			uploadText.innerText = uploadFile.value.match(/[\/\\]([\w\d\s\.\-(\)]+)$/);
		}else {
			uploadText.innerText = "Файл не выбран";
		}
	});
}