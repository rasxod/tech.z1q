<?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['textBut'] = $_POST['textBut'];
  $_SESSION['blogurl'] = $_POST['blogurl'];
}
?>
<div class="row">
<form class="form-horizontal col-md-8 col-md-offset-1" role="form" action="/blogurl/" method='POST'>
  <div class="form-group">
    <label for="blogurl">Ссылка на блог</label>
    <input type="text" class="form-control" id="blogurl" name="blogurl" placeholder="Введите адрес картинки"  value="<?=$_SESSION['blogurl'];?>" />
  </div>
  <div class="form-group">
    <label for="textBut">Подпись ссылки</label>
    <input type="text" class="form-control" id="textBut" name="textBut" placeholder="Url на сайт"  value="<?=$_SESSION['textBut'];?>" />
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

<?
$myResalt = "<a href=\"".$_SESSION['blogurl']."\" target=\"_blank\">
   ".$_SESSION['textBut']."
</a>";
?>

<div class="row">
  <textarea rows="10" cols="100" class="form-control col-md-8 col-md-offset-1" style="margin: 26px;"><?=$myResalt;?></textarea>
</div>

<div class="row">
  <span class="prspan">пример</span>
  <div class="col-md-5 primer">
    <?=$myResalt;?>  
  </div>
</div>