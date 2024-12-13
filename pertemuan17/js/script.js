const tombolCari = document.querySelector(".button-cari");
const keyword = document.querySelector(".keyword");
const container = document.querySelector(".container");

// Hilangkan Tombol Cari 
tombolCari.style.display = 'none';

// Event Ketika Kita Menuliskan Keyword
keyword.addEventListener('keyup', function () {
  // Ajax
  
  /* XMLHttpRequest
  const xhr = new XMLHttpRequest();
  
  xhr.onreadystatechange = function () {
    if(xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  }
  
  xhr.open('get', 'Ajax/ajax_cari.php?keyword=' + keyword.value);
  xhr.send();
*/

// Fetch()
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
  .then((response) => response.text())
  .then((response) => (container.innerHTML = response));
  
});