<?php

use Illuminate\Support\Facades\Crypt;

'has_user_id' => Crypt::encryptString($user->id),
$validatedData['loker_id'] = Crypt::decryptString($validatedData['input-loker_id']);

