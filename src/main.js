// Wait until all attached Drupal libraries get loaded
document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('#example-page-app').innerHTML = "Hello world!";
});
