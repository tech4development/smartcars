<style>
    input[type="text"],input[type="tel"],input[type="email"]{
        border: 1px solid #ddd !important;
        border-radius: inherit;
    }
    label{
        left: 1rem !important;
        top: 1.5rem !important;
    }
    .row{
        margin-bottom: 0px;
    }
</style>
<div class="row">
    <form class="col s12" style="border: 1px solid #ddd; margin-top: 20px; margin-bottom: 20px;" action="postguru.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input class="browser-default" id="first_name" type="text" class="validate" name="fname">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate" name="lname">
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="telephone" type="tel" class="validate" name="tel">
                <label for="telephone">Telephone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="mail">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row center" style="margin-bottom: 10px;">
            <button class="btn waves-effect waves-light" type="submit" style="width:100%;">Subscribe
                <i class="material-icons right">send</i>
            </button>
        </div>

    </form>
</div>