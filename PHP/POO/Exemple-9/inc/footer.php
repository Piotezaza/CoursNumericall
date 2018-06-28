</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
      $form=$("form");

      function postMessage(e)
      {
          e.preventDefaults(); // Pout être sûr qu'il n'y aura pas d'autres méthodes submit appelées
          
          /* 
          $.ajax({ 

              url: '...', 
              method: 'POST', 
              data: $form.serialize()
          })
          .done(function(data){})
          */

          $.post(
              'src/enregistrerAjax.php', 
              $form.serialize() /* {message: $message.val(), ...} */, 
              function(data)
              {
                  $form.find('[name="message"]').val('');
              }
              , 'json'
          );

          return false; // évite le rechargement de la page
      }

      $form.submit(postMessage);
    </script>
  </body>
</html>