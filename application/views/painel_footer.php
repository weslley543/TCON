    
    
     </div>
     <script src="../assets/js/jQuery.min.js"></script>
     <script src="../assets/js/solicitacoesServico.js"></script>
     
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script>
  $(document).ready(function(){
    $.ajax({
      type:'GET',
      url:'<?=base_url('Servicos/getAll')?>',
      dataType:'json',
      success:function(response){
        console.log(response);

      }
    })
  })
</script>
</body>

</html>