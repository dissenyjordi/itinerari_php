        <!-- START - JS -->
        <!-- START - Jquery JS file --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <!-- END - Jquery JS file -->
        <!-- START - Popper JS file --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- END - Popper JS file -->
        <!-- START - Bootstrap JS file --> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- END - Bootstrap JS file -->
        <!-- START - Custom JS file --> 
        <script type="text/javascript" src="js/script.js"></script> 
        <!-- END - Custom JS file --> 
        <!-- END - JS -->
        <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>