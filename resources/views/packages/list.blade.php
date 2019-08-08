
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <div>
                <h1>Packages (<?=count($packages)?>)</h1>
            </div>
        </div>

        <div class="row" style="margin: 0;">
            <?php if (isset($packages) && !empty($packages)): ?>
                <?php foreach($packages as $package): ?>
                    <div class="package-block">
                        <div><h1><?=$package->title?></h1></div>
                        <div><span>Price: <?=$package->price?> <?=$package->currency?></span></div>
                        <!--div><span>days <?=$package->days?></span></div-->
                        <div><p><?=$package->short_description?></p></div>
                        <div>
                            <button class="btn btn-secondary btn-package" id-package="<?=$package->id?>" >Detailes...</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div><i>Not packages</i></div>
            <?php endif; ?>
        </div>

    </div>

@endsection