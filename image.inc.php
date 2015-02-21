<?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['imgAdr'] = $_POST['imgAdr'];
  $_SESSION['siteUrl'] = $_POST['siteUrl'];
  $_SESSION['altImg'] = $_POST['altImg'];
  $_SESSION['wImg'] = $_POST['wImg'];
}
?>
<div class="row">
<form class="form-horizontal col-md-8 col-md-offset-1" role="form" action="/image/" method='POST'>
  <div class="form-group">
    <label for="imgAdr">Url изображения</label>
    <input type="text" class="form-control" id="imgAdr" name="imgAdr" placeholder="Введите адрес картинки"  value="<?=$_SESSION['imgAdr'];?>" />
  </div>
  <div class="form-group">
    <label for="siteUrl">Url на сайт</label>
    <input type="text" class="form-control" id="siteUrl" name="siteUrl" placeholder="Url на сайт"  value="<?=$_SESSION['siteUrl'];?>" />
  </div>
  <div class="form-group">
    <label for="altImg">Alt изображения</label>
    <input type="text" class="form-control" id="altImg" name="altImg" placeholder="Alt изображения" value="<?=$_SESSION['altImg'];?>" />
  </div>
  <div class="form-group">
    <label for="wImg">Ширина изображения</label>
    <input type="text" class="form-control" id="wImg" name="wImg" placeholder="Число ширины картинки например 300" value="<?=$_SESSION['wImg'];?>" />
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

<?
$myResalt = "<a href=\"".$_SESSION['siteUrl']."\">
    <img src=\"".$_SESSION['imgAdr']."\" alt=\"".$_SESSION['altImg']."\" width=\"".$_SESSION['wImg']."\"/>
</a>";
?>

<div class="row">
  <textarea rows="10" cols="100" class="form-control col-md-8 col-md-offset-1" style="margin: 26px;"><?=$myResalt;?></textarea>
</div>

<div class="row shIMG">
  <span class="prspan">пример</span>
  <div class="col-md-11 primer">
    <?=$myResalt;?>  
  </div>
</div>