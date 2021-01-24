<script>       
        function rowAdd() {
          document.querySelector(".house-senate-committee:last-child").insertAdjacentHTML('afterend', newRow());
        }

        function newRow() {
              return `<div>
                    <input type="text" placeholder="Nome Item" name="nomeP" id="nomeP">   
                    <input type="number" placeholder="0" min="0" name="numeroP" id="numeroP">
              </div>`;

         }  
</script>  