# css-icons-php
This is the class file containing functions which return the array of css class => icon paire for custom cms for CRUD which contains dynamic icons fields.

Usage : 

// Including class file in to another class
// First Put file in the Controllers folder of your favourite MVC framework
// In Codeigniter 4 
use App\Controllers\FontAwaysome;

calliing functions inside another class function 

//E.g.

public function test()
{
$fontawaysomeicons=FontAwaysome::getAllIcons();
$flaticons=FontAwaysome::getAllFlaticons();
}
// To display properly in the CRUD form you need to include fontawaysome css or flatocon css file CDN in the view.
//for FontAwaysome
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

// for Flaticons
include the Flaticon.css from the folder Flaticons

// Using With Select 2 
<select class="text-primary fa-select select2 form-control fill" name="icon" style="font-family: 'FontAwesome', 'sans-serif';" required>
   <?php foreach ($faicons as $key=>$val){
   $selected=($key==$icon)?'selected':'';
   ?>
   <option value="<?=$key?>"  <?=($selected)?> > <?=$val?>  <?=$key?> </option>
  <?php }?>
</select>

//Apply css to select2 conatiners to display properly the icons 
//E.g. for FontAwaysome icons
<style>
    .select2-selection__rendered, .select2-results__option {
  font-family: FontAwesome, sans-serif;
  /*font-size: 12px;*/
}
</style>

//E.g for Flaticons 
<style>
    .select2-selection__rendered, .select2-results__option {
  font-family: Flaticons, sans-serif;
  /*font-size: 12px;*/
}
</style>

