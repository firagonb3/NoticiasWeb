document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('b')
  .addEventListener('click',function(){
      var copyText = document.getElementById("copy");
      var textArea = document.createElement("textarea");
      textArea.value = copyText.textContent;
      document.body.appendChild(textArea);
      textArea.select();
      document.execCommand("Copy");
      textArea.remove();
  });

  var toastTrigger = document.getElementById('liveToastBtn');
  var toastLiveExample = document.getElementById('liveToast');
  if (toastTrigger) {
    toastTrigger.addEventListener('click', function () {
      var toast = new bootstrap.Toast(toastLiveExample);
      toast.show();
    });
  }
});