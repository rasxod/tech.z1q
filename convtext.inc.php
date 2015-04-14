<script type="text/javascript">
$(function() {
  $('.convLink').click(function(){
    var siteUrl = $('#siteUrl').val(); var textUrl = $('#textUrl').val(); siteUrl = '<a href="'+siteUrl+'">'+textUrl+'</a>';
    var soursText = $('#soursText').val();
    soursText = soursText.replace(new RegExp(textUrl,'g'), siteUrl);
    $('#extText').empty().val(soursText); 
  });
});
</script>
<div class="row">
  <div class="form-group">
    <label for="siteUrl">Ссылка на сайт</label>
    <input type="text" class="form-control" id="siteUrl" name="siteUrl" placeholder="Url ссылки"  value="" />
  </div>
  <div class="form-group">
    <label for="textUrl">Текст ссылки</label>
    <input type="text" class="form-control" id="textUrl" name="textUrl" placeholder="Текст ссылки"  value="" />
  </div>
  <div class="form-group">
    <label for="soursText">Исходный текст</label>
    <textarea rows="10" cols="50" id="soursText" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-success convLink">Добавить ссылку</button>
  <div class="form-group">
    <label for="extText">Результат</label>
    <textarea rows="10" cols="50" id="extText" class="form-control"></textarea>
  </div>
</div>