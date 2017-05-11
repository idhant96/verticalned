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
<br><br>
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

    <br /><br />
  <!--    <a class="waves-effect waves-light btn" onClick="expandAll();">Expand All</a>-->

    <br /><br />
    <h3>Tasks for week</h3>
            <ul class="collapsible" data-collapsible="expandable">
                <li>
                  <div class="collapsible-header"><i class="mdi-navigation-chevron-right"></i><a name="987"/>First</a></div>
                  <div class="collapsible-body"><p>First Things First</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="mdi-navigation-chevron-right"></i>Second</div>
                  <div class="collapsible-body"><p>Give me a second ...</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="mdi-navigation-chevron-right"></i>Third</div>
                  <div class="collapsible-body"><p>I don't like being a third wheel</div>
                </li>
            </ul>
                  <a class="waves-effect waves-light btn" onClick="collapseAll();">Collapse All</a>

        </div>

</div>
