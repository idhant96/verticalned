<div class="col s12 l3 m3">
<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Make announcement</a>

    <div id="modal1" class="modal">
      <div class="modal-content">

        <form method="post" action="index.php?page=front_page">
          <div class="container">

            <div class="input-field">
              <input placeholder="Enter the title" id="title" type="text" name = 'subject' class="validate">
              <label for="title">Subject</label>
            </div><br><br>

            <div class="input-field">
              <input id="Links" type="text" name="links" class="validate">
              <label for="Links">Links</label>
            </div><br><br>

            <div class="input-field">
               <input type="checkbox" id="first" name="first" />
                 <label for="first">First Year</label>
               </div>


           <div class="input-field ">
               <input type="checkbox" id="second"  name="second" />
                 <label for="second">Second Year</label>
          </div>

           <div class="input-field">
               <input type="checkbox" id="third" name="third" />
                 <label for="third">Third Year</label>
          </div>

           <div class="input-field">
               <input type="checkbox" id="fourth" name="fourth" />
                 <label for="fourth">Fourth Year</label>
          </div>

            <div class="input-field">
              <textarea id="description" class="materialize-textarea" name="description" required></textarea>
              <label for="description">Description</label>
            </div><br><br>
          </div>
          <div class="modal-footer">
            <button type = 'submit' name = 'submit' class="modal-action modal=close waves-effect waves-green btn-flat">Announce</button>
          </div>
        </form>

      </div>

    </div>
</div>
