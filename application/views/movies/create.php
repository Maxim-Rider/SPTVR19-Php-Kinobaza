<form action="/movies/create/" method="post">

<input class="form-control input-lg" type="input" name="slug" placeholder="слизняк"><br>
<input class="form-control input-lg" type="input" name="name" placeholder="название фильма"><br>
<textarea class="form-control input-lg" name="description" placeholder="описание"></textarea><br>
<input class="form-control input-lg" type="input" name="year" placeholder="год"><br>
<input class="form-control input-lg" type="input" name="rating" placeholder="рейтинг"><br>
<input class="form-control input-lg" type="input" name="poster" placeholder="ссылка на постер"><br>
<input class="form-control input-lg" type="input" name="player_code" placeholder="ссылка на плеер"><br>
<input class="form-control input-lg" type="input" name="director" placeholder="режиссёр"><br>
<input class="form-control input-lg" type="input" name="add_date" placeholder="<?php echo date("Y-m-d"). " ".date("h:i:s"); ?>"><br>
<input class="form-control input-lg" type="input" name="category_id" placeholder="категоричя (1=фильма; 2=сериал"><br>
<input type="sumbit" class="btn btn-success" name="submit" value="Добавить фильм/сериал">

</form>