
<style>
    .word-width {
        margin-right: 20px;
        width: 600px;
        float: left;
    }
    .city-width {
        margin-right: 20px;
        width: 200px;
        float: left;
    }
    .bgcolor {
        background-color: #e7e7e7;
        padding-top: 10px;
        margin-bottom: 30px;
        border-radius: 7px;
    }
    .fi-hot {
        background-image: url('/img/hot-icon-26.jpg') no-repeat;
        width:26px;
        height:26px;
    }
</style>

<div class="container">
    <div class="row" style="margin: 0;">
        <div class="col-md-12 bgcolor">
            <div style="margin-bottom: 5px;">Find best ...</div>
            <form action="" method="get" class="" style="">
                <div class="form-group" >
                    <input name="kw" class="form-control word-width" type="text" value="" placeholder="Write keywords.." />

                    <select name="city" class="form-control city-width">
                        <option value="">All cities</option>
                        <?php foreach($cities as $city): ?>
                        <option value="<?=$city->id?>" ><?=$city->name?></option>
                        <?php endforeach; ?>
                    </select>

                    <button class="btn btn-secondary" type="submit" style="margin-right: 20px;">Find</button>

                    <a href="/jobs/advanced">Advanced search</a>
                </div>
            </form>
        </div>
    </div>
</div>
