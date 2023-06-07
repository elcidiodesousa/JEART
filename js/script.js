function contarCheckboxes() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var count = 0;
  
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      count++;
    }
  }
  
  alert('Produtos selecionados: ' + count);
}