<?php

/*
by: @ALOOSH080
CH : @dev_start
Ch2 : @YemenAndroid1
*/

ob_start();
$API_KEY = '6589576778:AAHLg2h9FaGj5M__EIqPzblFoz8k_vNsPag'; //add your bot token
$sudo = 1498945968; // add your id
$bot_id = 6589576778;
$e = "@مcatro_bot";
define('API_KEY', $API_KEY);
function bot($method, $datas = [])
{
  $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch)) {
    var_dump(curl_error($ch));
  } else {
    return json_decode($res);
  }
}


$update = json_decode(file_get_contents('php://input'));
$filterlist = file_get_contents("data/$chat_id/filter.txt");
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$php_i = $message->chat->id;
$dev_start = $message->chat->id;
$text       = $message->text;
$chat_id    = $message->chat->id;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb       = $update->message->message_id;
$game       = $update->message->game;
$name       = $update->message->from->first_name;
$re         = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$mid        = $message->message_id;

$number     = str_word_count($text);
$numper     = strlen($text);
$set        = file_get_contents("data/$chat_id.txt");
$ex         = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1       = $ex[3];
$fwd1       = $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1       = $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$commands = array('/add', '/lock photo', '/lock voice', '/lock audio', '/lock video', '/lock link', '/lock user', '/lock sticker', '/lock contact', '/lock doc', '/promote', '/ban', '/kick', '/pin', '/setname', "قفل الصور", "قفل البصمات", "قفل الصوت", "قفل الفيديو", "قفل الروابط", "قفل الجهات", "قفل الملفات", "حظر", "طرد", "رفع ادمن", "ضع اسم", "تثبيت", "/link", "الرابط");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=" . $bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if (in_array($text, $commands) and $bot != "administrator") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "🚫┇للأسف البوت ليس ادمن في المجموعة",
    'reply_to_message_id' => $mid
  ]);
}
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=" . $from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
$data = $update->callback_query->data;
$pr_get = file_get_contents("data/pr.txt");
$pr = explode("\n", $pr_get);
$z = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=" . $from_id);
$info = json_decode($z, true);
$you = $info['result']['status'];
$sudo = "535521677";
$memo = file_get_contents("data/memo.txt");
$admins = file_get_contents("data/$chat_id/admin.txt");
$onair = file_get_contents("data/$chat_id/onair.txt");
$cretor = file_get_contents("data/$chat_id/cretor.txt");
$memberil = file_get_contents("data/$chat_id/memberil.txt");
date_default_timezone_set('Asia/Baghdad');
if ($text == "/start" and $type == "private") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "💯¦ مـرحبآ آنآ بوت آسـمـي فير 🎖
💰¦ آختصـآصـي حمـآيهہ‌‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‌‏ وآلتگرآر وآلخ...
🚸¦ البوت خدمي ومتاح للكل 
👷🏽¦ فقط اضف البوت لمجموعتك وارفعه مشرف  
  ثم ارسل تفعيل

⚖️¦ مـعرف آلمـطـور  : @ALOOSH080
👨🏽‍🔧",
    'reply_markup' => json_encode([
      'inline_keyboard' => [
        [['text' => "آلمـطـور ™", 'url' => "https://t.me/ALOOSH080"]]
      ]


    ])
  ]);
  bot('sendMessage', [
    'chat_id' => $sudo,
    'text' => "
شخص قام بالدخول إلى البوت
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
ℓ☯️- المعرف الخاص بالعضو
ℓ🅿️- [@$user](t.me/$user)
➖➖
ℓ✳️- الاسم الخاص بالعضو
ℓ📳- [$name](t.me/$user)
➖➖
ℓ🚹- الايدي الخاص بالعضو
ℓ🆔- [$user_id](t.me/$user)
➖➖
ـ➖➖➖➖
⏰┇الساعة :: " . date("g", $time) . ":" . date("i", $time) . "
📆┇التاريخ :: " . date("Y") . "/" . date("n") . "/" . date("d") . "
ـ➖➖➖➖
📮
",
    disable_web_page_preview => true,
    parse_mode => "Markdown",
  ]);
}
if ($new and $new->id == $bot_id) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "💯¦ مـرحبآ آنآ بوت آسـمـي فير 🎖
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...
⚖️¦ مـعرف آلمـطـور  : @ALOOSH080 🌿
👨🏽‍🔧",
  ]);
}

if ($type == "supergroup" and in_array($chat_id, $groups)) {

  if ($you != "creator" && $you != "administrator" && $from_id != $sudo) {
    if ($photo && $photo1 == "l") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }

    if ($voice and $voice1 == "l") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($audio && $audio1 == "l") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($video && $video1 == "l") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/', $text)) {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/', $text)) {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($doc and $doc1 == "l") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($sticker and $sticker1 == "l") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($update->message->forward_from && $fwd1 == "l") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($message->entities and $mark1 == "l") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message->message_id
      ]);
    }
    if ($new and $bots1 == "l") {
      $new_user = $new->username;
      if (preg_match('/^(.*)([Bb][Oo][Tt]/', $new_user)) {
        bot('kickChatMember', [
          'chat_id' => $chat_id,
          'user_id' => $new->id
        ]);
      }
    }
  }
}

if ($bot == "administrator") {
  if ($you == "creator" or $you == "administrator" or $sudo) {
    $re_user    = $update->message->reply_to_message->from->username;
    if ($re  &&  $text == "حذف") {
      bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $re_msgid
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($re and $re_id != $bot and $re_id != $sudo and $text == "/ban" or $text == "حظر" or $text == "/kick" or $text == "طرد") {
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم الحظر 
✓️",
          'reply_to_message_id' => $mid
        ]);
        bot('kickChatMember', [
          'chat_id' => $chat_id,
          'user_id' => $re_id
        ]);
      }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($re and $re_id != $bot and $re_id != $sudo and $text == "/unban" or $text == "الغاء الحظر") {
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء الحظر 
✓️",
          'reply_to_message_id' => $mid
        ]);
        bot('unbanChatMember', [
          'chat_id' => $chat_id,
          'user_id' => $re_id
        ]);
      }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/promote" or $text == "رفع ادمن") {
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تمت ترقيته ليصبح ادمن 
✓️",
          'reply_to_message_id' => $mid
        ]);
        bot('promoteChatMember', [
          'chat_id' => $chat_id,
          'user_id' => $re_id
        ]);
      }
    $ename = str_replace("/setname ", "$ename", $text);
    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      $aname = str_replace("ضع اسم ", "$aname", $text);
    if ($text == "/setname $ename") {
      bot('setChatTitle', [
        'chat_id' => $chat_id,
        'title' => $ename
      ]);
    }
    if ($text == "ضع اسم $aname") {
      bot('setChatTitle', [
        'chat_id' => $chat_id,
        'title' => $aname
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock photo" or $text == "قفل الصور") {
        file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }


    if ($text == "قفل الصور" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }
    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open photo" or $text == "فتح الصور") {
        file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح الصور" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock sticker" or $text == "قفل الملصقات") {
        file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل الملصقات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open sticker" or $text == "فتح الملصقات") {
        file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }


    if ($text == "فتح الملصقات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock contact" or $text == "قفل الجهات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل جهات الاتصال 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل الجهات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open contact" or $text == "فتح الجهات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح جهات الاتصال 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح الجهات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock doc" or $text == "قفل الملفات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل الملفات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open doc" or $text == "فتح الملفات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح الملفات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock fwd" or $text == "قفل التوجيه") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التوجيه 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }


    if ($text == "قفل التوجيه" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open fwd" or $text == "فتح التوجيه") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التوجيه 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح التوجيه" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock voice" or $text == "قفل البصمات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمات 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل البصمات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open voice" or $text == "فتح البصمات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمات 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح البصمات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock link" or $text == "قفل الروابط") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الروابط 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل الروابط" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open link" or $text == "فتح الروابط") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الروابط 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }


    if ($text == "فتح الروابط" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock audio" or $text == "قفل الصوت") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل الصوت" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open audio" or $text == "فتح الصوت") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح الصوت" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock video" or $text == "قفل الفيديو") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الفيديو 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل الفيديو" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open video" or $text == "فتح الفيديو") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الفيديو 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح الفيديو" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock user" or $text == "قفل المعرفات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات @
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل المعرفات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }


    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open user" or $text == "فتح المعرفات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات @
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح المعرفات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock mark" or $text == "قفل الماركدون") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الماركدون 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل الماركدون" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open mark" or $text == "فتح الماركدون") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الماركدون 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح الماركدون" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock bots" or $text == "قفل البوتات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "قفل البوتات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open bots" or $text == "فتح البوتات") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }

    if ($text == "فتح البوتات" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock all" or $text == "قفل الكل") {
        file_put_contents("data/$chat_id.txt", "\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\no\n1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الكل
✓",
          'reply_to_message_id' => $mid,
        ]);
      }

    if ($text == "قفل الكل" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open all" or $text == "فتح الكل") {
        file_put_contents("data/$chat_id.txt", "\no\no\no\no\no\no\no\no\no\no\no\no\no");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الكل
✓",
          'reply_to_message_id' => $mid,
        ]);
      }

    if ($text == "فتح الكل" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock bots" or $text == "قفل المتحرك") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المتحرك
✓",
          'reply_to_message_id' => $mid,
        ]);
      }

    if ($text == "قفل المتحرك" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open bots" or $text == "فتح المتحرك") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots\n$cha1\no");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المتحرك
✓",
          'reply_to_message_id' => $mid,
        ]);
      }

    if ($text == "فتح المتحرك" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock user" or $text == "قفل التاك") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\nl\n$mark1\n$bots1\n$cha1\n$gif1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التاك #
✓",
          'reply_to_message_id' => $mid,
        ]);
      }

    if ($text == "قفل التاك" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open user" or $text == "فتح التاك") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\no\n$mark1\n$bots1\n$cha1\n$gif1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التاك #
✓",
          'reply_to_message_id' => $mid,
        ]);
      }

    if ($text == "فتح التاك" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/lock bots" or $text == "قفل الدردشه") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n1\n$gif1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الدردشه
✓",
          'reply_to_message_id' => $mid,
        ]);
      }

    if ($text == "قفل الدردشه" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "/open bots" or $text == "فتح الدردشه") {
        file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots\no\n$gif1");
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "️🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الدردشه
✓️",
          'reply_to_message_id' => $mid,
        ]);
      }

    if ($text == "فتح الدردشه" and  $you == "member" and $id !== $sudo) {
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
        'reply_to_message_id' => $mid,
        'parse_mode' => 'MARKDOWN',
        'disable_web_page_preview' => true,
      ]);
    }

    if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
      if ($text == "الاوامر") {
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "❂

 ‌‌‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‌‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلآدآرهہ‌‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‌‏
🛡¦ م3 » آوآمـر آلحمـآيهہ‌‏
🕹¦ م المطور »  آوآمـر آلمـطـور


 ‌‌‏❋¦ رآسـلني للآسـتفسـآر ☜ { @ALOOSH080 } ✓",
        ]);
      }
  }
}

if ($text == "الاوامر" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($bot == "administrator") {
  if ($you == "administrator" or $you == "creator") {
    if ($text == "/add" or $text == "/add$e" or $text == "تفعيل") {
      if (!in_array($chat_id, $groups)) {
        file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no");
        file_put_contents("data/groups.txt", "$chat_id\n", FILE_APPEND);
        $t =  $message->chat->title;
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
✓",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }
      if (in_array($chat_id, $groups)) {
        $t =  $message->chat->title;
        bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "🎗¦ المجموعه بالتأكيد ✓️ تم تفعيلها",
          'reply_to_message_id' => $mid,
          'parse_mode' => 'MARKDOWN',
          'disable_web_page_preview' => true,
        ]);
      }
    }
  }
}
if ($text == "المجموعات") {
  $c = count($groups);
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📮¦ عدد المجموعات المفعلة » $c  ➼"
  ]);
}
if ($text == "اذاعه" and $for == $sudo) {
  file_put_contents("mode.txt", "bc");
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛"
  ]);
}
$mode = file_get_contents("mode.txt");
if ($text != "اذاعه" and $mode == "bc" and $for == $sudo) {
  for ($i = 0; $i < count($groups); $i++) {
    bot('sendMessage', [
      'chat_id' => $groups[$i],
      'text' => " $text"
    ]);
  }
  unlink("mode.txt");
}
$id   = $message->from->id;
$user = $message->from->username;
$name = $message->from->first_name;
if ($text == "موقعي" and $you == "creator" and $id !== $sudo) {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{  $name  }⊰•
💠¦ المعرف •⊱ @$user ⊰•
⚜️¦ الايـدي •⊱ { $id } ⊰•
🚸¦ رتبتــك •⊱ المنشىء 👷🏼‍⚕️ ⊰•
🔰¦ ــ •⊱ { -$chat_id } ⊰•
ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱ @ALOOSH080 ⊰•
",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "موقعي" and  $you == "administrator" and $id !== $sudo) {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{  $name  }⊰•
💠¦ المعرف •⊱ @$user ⊰•
⚜️¦ الايـدي •⊱ { $id } ⊰•
🚸¦ رتبتــك •⊱ ادمن في البوت 👨🏼‍🎓🏼‍⚕️ ⊰•
🔰¦ ــ •⊱ { -$chat_id } ⊰•
ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱ @ALOOSH080 ⊰•",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "موقعي" and  $you == "member" and $id !== $sudo) {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{  $name  }⊰•
💠¦ المعرف •⊱ @$user ⊰•
⚜️¦ الايـدي •⊱ { $id } ⊰•
🚸¦ رتبتــك •⊱ فقط عضو 🙍🏼‍♂🏼‍⚕️ ⊰•
🔰¦ ــ •⊱ { -$chat_id } ⊰•
ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱ @ALOOSH080 ⊰•",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "موقعي" and $id == $sudo) {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{  $name  }⊰•
💠¦ المعرف •⊱ @$user ⊰•
⚜️¦ الايـدي •⊱ { $id } ⊰•
🚸¦ رتبتــك •⊱ مطور اساسي 👨🏻‍⚕️ ⊰•
🔰¦ ــ •⊱ { -$chat_id } ⊰•
ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱ @ALOOSH080 ⊰•",
    'reply_to_message_id' => $message->message_id,
  ]);
}

$rnd = rand(1, 999999999999999999);
if ($text == "صورتي") {
  $re = bot("getUserProfilePhotos", ["user_id" => $id, "limit" => 1, "offset" => 0]);
  $res = $re->result->photos[0][2]->file_id;
  $pa = bot("getFile", ["file_id" => $res]);
  $path = $pa->result->file_path;
  file_put_contents("$rnd.jpg", file_get_contents("https://api.telegram.org/file/bot" . $API_KEY . "/" . $path));
  $uphoto = "https://hxhs.000webhostapp.com//$rnd.jpg"; // رابط استضافتك
  bot("sendPhoto", [
    'chat_id' => $chat_id,
    "photo" => $uphoto,
    'caption' => " ",
    'reply_to_message_id' => $message->message_id,
  ]);
  unlink("$rnd.jpg");
}
if ($text == "/link" or $text == "الرابط") {
  $t =  $message->chat->title;
  $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
  $l = $export->result;
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "🔖¦رابـط مجمـــوعة: 💯
🌿¦ $t :

$l",
    'disable_web_page_preview' => true,
    'reply_to_message_id' => $message->message_id,
  ]);
}
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id;
$id_bot = 6589576778;
if (preg_match('/^(.*)([Bb][Oo][Tt])/', $usser) and $New_member and $id != $id_bot and  $you == "member") {
  bot('kickChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $id
  ]);
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "👤¦ آلعضـو : @$user
👤¦ الايدي : $id 
🚫¦ مـمـنوع آضـآفهہ آلبوتآت 
📛¦ تم طـرد آلبوت 
✘",
  ]);
}
if (preg_match('/^(مسح) (.*)/', $text, $delmsg) and $from_id == $sudo) {
  for ($h = $message_id; $h >= $message_id - $delmsg[2]; $h--) {
    bot('deletemessage', [
      'chat_id' => $chat_id,
      'message_id' => $h,
    ]);
  }
}
$editMessage = $update->edited_message;
$chatedit = $update->edited_message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
if ($editMessage) {
  bot('sendMessage', [
    'chat_id' => $chatedit,
    'text' => 'لتعدل خل العالم تشوف الفضايح 🙈😂',
    'message_id' => $message->edited_message->message_id,
    'reply_to_message_id' => $update->edited_message->message_id,
  ]);
}
if ($rep && $text == "ايدي" or $text == "ايديه") {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => " $re_id ",
  ]);
}
if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "م1") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "•⊱ {  آوآمر الرفع والتنزيل  } ⊰•


📿¦ رفع ادمن ‿ تنزيل ادمن  

 

⦅آوآمـر آلحظـر وآلطــرد وآلتقييـد  ⦆
      
🔱¦ حظر (بالرد/بالمعرف) •⊱ لحظر العضو
⚜¦ طرد ( بالرد/بالمعرف) •⊱ لطرد العضو 
🔅¦ كتم (بالرد/بالمعرف) •⊱ لكتم العضو 
🌀¦ تقييد (بالرد/بالمعرف) •⊱ لتقييد العضو
🚸¦ الغاء الحظر (بالرد/بالمعرف) •⊱ لالغاء الحظر 
🔆¦ الغاء الكتم (بالرد/بالمعرف) •⊱ لالغاء الكتم 
〰¦ الغاء التقييد (بالرد/بالمعرف) •⊱ لالغاء تقييد العضو 

🗯┇ راسلني للاستفسار 💡↭ @ALOOSH080",
      'reply_to_message_id' => $message->message_id,
    ]);
  }

if ($text == "م1" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "م2") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "👨🏽‍✈️¦  اوامر الوضع للمجموعه ::

📮¦ـ➖➖➖➖➖  
💭¦ ضع اسم  ↜ لوضع اسم المحموعة
  
💭¦ الـرابـط :↜  لعرض الرابط  
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  اوامر رؤية الاعدادات ::

🗯¦ الادمنيه : لعرض  الادمنيه 
🗯¦ المطور : لعرض معلومات المطور 
🗯¦ موقعي :↜لعرض معلوماتك  

➖➖➖➖➖➖➖
🗯¦ راسلني للاستفسار 💡↭ @ALOOSH080",
      'reply_to_message_id' => $message->message_id,
    ]);
  }

if ($text == "م2" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "م3") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "⚡️ اوامر حماية المجموعه ⚡️
🗯¦ـ➖➖➖➖
🗯¦️ قفل «» فتح •⊱ البصمات ⊰•
🗯¦ قفل «» فتح •⊱ الــفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الـصــور ⊰•
🗯¦ قفل «» فتح •⊱ الملصقات ⊰•

🗯¦ قفل «» فتح •⊱ المتحركه ⊰•
🗯¦ قفل «» فتح •⊱ الدردشه ⊰•

🗯¦ قفل «» فتح •⊱ الروابط ⊰•
🗯¦ قفل «» فتح •⊱ التاك ⊰•
🗯¦ قفل «» فتح •⊱ البوتات ⊰•
🗯¦ ️قفل «» فتح •⊱ المعرفات ⊰•
🗯¦ قفل «» فتح •⊱ البوتات  ⊰•
🗯¦ قفل «» فتح •⊱ التوجيه ⊰•

🗯¦ قفل «» فتح •⊱ الجهات ⊰•
🗯¦ قفل «» فتح •⊱ الــكـــل ⊰•
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ @ALOOSH080",
      'reply_to_message_id' => $message->message_id,
    ]);
  }

if ($text == "م3" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

$admin = 535521677;
if ($text == "م المطور" && $from_id == $admin) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
...

🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏

🔅¦ تفعيل : لتفعيل البوت 
🔅¦ اذاعه : لنشر كلمه لكل المجموعات
🔅¦ استخدم /admin في خاص البوت فقط : لعرض كيبود الخاص بك 💯 
🔅¦ تحديث: لتحديث ملفات البوت
🔅¦ غادر : لمغادرة  البوت 
🔅¦ حظر عام : لحظر العضو من البوت عام
🔅¦ـ➖➖➖➖➖

🗯¦ راسلني للاستفسار 💡↭ @ALOOSH080
",
    'parse_mode' => 'MarkDown', 'disable_web_page_preview' => true, 'reply_to_message_id' => $message->message_id,
  ]);
}

if ($text == "م المطور" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "🔅¦ للمطور الاساسي فقط  🎖",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "اذاعه" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

$admin = 535521677;
if ($text == "تحديث ♻️" && $from_id == $admin) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "🎖
🗂¦ تم تحديث الملفات
√
",
    'parse_mode' => 'MarkDown', 'disable_web_page_preview' => true, 'reply_to_message_id' => $message->message_id,
  ]);
}
/*
by: @ALOOSH080
CH : @dev_start
Ch2 : @YemenAndroid1
*/

if ($text == 'مطور' or $text == "المطور") {
  bot('sendContact', [
    'chat_id' => $chat_id,
    'phone_number' => "+الرقم",
    'first_name' => "م̶̶ـ̶̶ـ̶̶ي̶̶م̶̶ـ̶̶ـ̶̶و 34K ™`☻",
    'last_name' => "ٵڵٵڼـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫҉ৡـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫ैۖـښـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫҉ৡـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲैۖـٱڹ 📿 ٵلڕجُيُـُैُۖـُـُـُـُࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧۖـُـُـُـࣩࣩࣩࣩࣩࣩࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧم",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "رتبتي" and $you == "creator") {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "🎫¦ رتبتك » المنشىء 🏌🏻
🌿
",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "رتبتي" and  $you == "administrator") {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "🎫¦ رتبتك » ادمن في البوت 🎖
🌿",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "رتبتي" and  $you == "member") {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "🎫¦ رتبتك » فقط عضو 🙍🏼‍♂️
🌿",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "انجب" and $you == "creator") {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "حاظر تاج راسي انجبيت 😇
",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "انجب" and $you == "administrator") {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "فوك ما مصعدك ادمن و تكلي انجب 😏 ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "انجب" and $you == "member") {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "انجب انته لا تندفر 😒",
    'reply_to_message_id' => $message->message_id,
  ]);
}
$me = $message->reply_to_message;
$mem = $me->message_id;
$MEMO = explode('كله', $text);
if ($MEMO) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => $MEMO[1],
    'reply_to_message_id' => $mem,
  ]);
}
$MEMO = explode('كول', $text);
if ($MEMO) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => $MEMO[1],
  ]);
}
$u = explode("\n", file_get_contents("memb.txt"));
$m = count($u) - 1;
$modxe = file_get_contents("usr.txt");
if ($update && !in_array($chat_id, $u)) {
  file_put_contents("memb.txt", $chat_id . "\n", FILE_APPEND);
}
if ($text == '/admin' and $for == $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => '🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
...

🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏',
    'reply_markup' => json_encode([
      'keyboard' => [
        [
          ['text' => '🆔¦ ايديك •']
        ],
        [
          ['text' => '💯¦ المشتركين •'], ['text' => '☑️¦ المجموعات •']
        ],
        [
          ['text' => '🚸¦ اسمك •']
        ],
        [
          ['text' => '💢¦ معرفك •']
        ],
        [
          ['text' => '📊¦ الاحصائيات •']
        ],
        [
          ['text' => '🔂¦ اذاعة •']
        ],
        [
          ['text' => '🛠¦ المطور •']
        ],
        [
          ['text' => '📡¦ قناة المطور •'], ['text' => '🛠¦ المساعدة •']
        ],
      ]
    ])
  ]);
}
if ($text == "🔂¦ اذاعة •" and $for == $sudo) {
  file_put_contents("mode.txt", "bc");
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛"
  ]);
}
$mode = file_get_contents("mode.txt");
if ($text != "🔂¦ اذاعة •" and $mode == "bc" and $for == $sudo) {
  for ($i = 0; $i < count($groups); $i++) {
    bot('sendMessage', [
      'chat_id' => $groups[$i],
      'text' => " $text"
    ]);
  }
  unlink("mode.txt");
}
if ($text == "☑️¦ المجموعات •") {
  $c = count($groups);
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📮¦ عدد المجموعات المفعلة » $c  ➼"
  ]);
}
$id = $message->from->id;
if ($text == "🆔¦ ايديك •") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " $id ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "🚸¦ اسمك •") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " $name ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "💢¦ معرفك •") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " @$user ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "🛠¦ المطور •" and $for == $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " 🏌🏻¦ مـطـور البوت : @$user 👨🏽‍🔧 ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "💯¦ المشتركين •" and $from_id == $sudo) {
  $m = count($u) - 1;
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "💯¦ عدد مشتركين البوت :- { $m }",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "📊¦ الاحصائيات •") {
  $c = count($groups);
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " الاحصائيات : 📈 

📊¦ عدد المجموعات المفعله : $c 
📊¦ عدد المشتركين في البوت : $m
📡 ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "📡¦ قناة المطور •") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "🛠¦   قناة مـطـور الملف : @dev_start ☑️ ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "🛠¦ المساعدة •") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "💯¦ للمساعدة او اي أراء او افكار تواصل مع مطور الملف @ALOOSH080 √",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($you == "creator" or $you == "administrator" or $from_id == $sudo) {
  if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
    $result2 = $json2->result;
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => " ",
      'reply_to_message_id' => $message->message_id,
    ]);
    bot('sendMessage', [
      'chat_id' => $sudo,
      'text' => "

👮🏽¦ قام شخص بتفعيل البوت ...

ــــــــــــــــــــــــــــــــــــــــــ
📑¦ معلومات المجموعه
🗯¦ الاسم •⊱ $t   ⊰• 
📊¦ رابط المجموعة • $l •
📛¦ الايدي •⊱$chat_id⊰•
🙋🏻‍♂¦ ألاعـضـاء •⊱{ $count }⊰• 
ــــــــــــــــــــــــــــــــــــــــــ
⚖️¦ معلومات الشخص 
👨🏽‍💻¦ الاسـم •⊱{ ⊰ $name ⊱  }⊰•

🎟¦ الـمعرف  •⊱ @$user ⊰•
ــــــــــــــــــــــــــــــــــــــــــ
⏱¦ الساعه •⊱ $date $aa ⊰•
",
    ]);
  }
}
if ($text == "ايديي") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " $id ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "معرفي") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " @$user ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "اسمي") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " $name ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "بوت") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "أسمي فير 🌚🌸",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "😔") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "ليش الحلو ضايج ❤️🍃",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "😳") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "ها بس لا شفت خالتك الشكره 😳😹🕷",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "😭") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "لتبجي حياتي 😭😭",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "😡") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "ابرد  🚒",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "😍") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "يَمـه̷̐ إآلُحــ❤ــب يَمـه̷̐ ❤️😍",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "😉") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "😻🙈",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "😋") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "طبب لسانك جوه عيب 😌",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "☹️") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "لضوج حبيبي 😢❤️🍃",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "هلو") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "هلووات 😊🌹",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "شكرا") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "{ •• الـّ~ـعـفو •• } ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "مشكور") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "{ •• الـّ~ـعـفو •• } ",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "مح") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "محات حياتي🙈❤",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "تف") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "عيب ابني/بتي اتفل/ي اكبر منها شوية 😌😹",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "تخليني") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "اخليك بزاويه 380 درجه وانته تعرف الباقي 🐸",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "اكرهك") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "ديله شلون اطيق خلقتك اني😾🖖🏿🕷",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "باي") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "بايات حياتي 😍 $name",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "زاحف") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "زاحف عله خالتك الشكره 🌝",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "واو") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "قميل 🌝🌿",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "شكو ماكو") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "غيرك/ج بل كلب ماكو يبعد كلبي😍❤️️",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "شكو") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "كلشي وكلاشي🐸تگـول عبالك احنـة بالشورجـة🌝",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "معزوفه") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "طرطاا طرطاا طرطاا 😂👌",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "زاحفه") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "لو زاحفتلك جان ماكلت زاحفه 🌝🌸",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "حفلش") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "افلش راسك 🤓",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == "ضوجه") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "شي اكيد الكبل ماكو 😂 لو بعدك/ج مازاحف/ة 🙊😋",
    'reply_to_message_id' => $message->message_id,
  ]);
}
$message_id = $update->message->message_id;
if ($text == "غنزدبليي") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "اللهم عذب المدرسين 😢 منهم الاحياء والاموات 😭🔥 اللهم عذب ام الانكليزي 😭💔 وكهربها بلتيار الرئيسي 😇 اللهم عذب ام الرياضيات وحولها الى غساله بطانيات 🙊 اللهم عذب ام الاسلاميه واجعلها بائعة الشاميه 😭🍃 اللهم عذب ام العربي وحولها الى بائعه البلبي اللهم عذب ام الجغرافيه واجعلها كلدجاجه الحافية اللهم عذب ام التاريخ وزحلقها بقشره من البطيخ وارسلها الى المريخ اللهم عذب ام الاحياء واجعلها كل مومياء اللهم عذب المعاون اقتله بلمدرسه بهاون 😂😂😂",
    'reply_to_message_id' => $message->message_id,
  ]);
}
if ($text == 'فير') {
  $rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑', 'نعم حبي 😎', 'اشتعلو اهل فير شتريد 😠', 'لك فداك فير حبيبي انت اموووح 💋', 'بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂', 'هياتني اجيت 🌚❤️', 'راجع المكتب حبيبي عبالك فير سهل تحجي ويا 😒', 'باقي ويتمدد 😎', 'لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي', 'دا اشرب جاي تعال غير وكت 😌', 'هوه غير يسكت عاد ها شتريد 😷', 'انت مو اجيت البارحه تغلط عليه ✋🏿😒');
  $ra = array_rand($rand, 1);
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => $rand[$ra],
    'reply_to_message_id' => $message_id
  ]);
}

if ($text == "السلام عليكم" or $text == "السلامو عليكم" or $text == "سلام عليكم" or $text == "سلام الله عليكم" or $text == "السلام  عليكم ورحمة الله" or $text == "السلام عليكم ورحمه الله" or $text == "السلام عليكم ورحمة الله وبركاته" or $text == "السلام عليكم ورحمة الله تعالى وبركاته" or $text == "سلام عليكم كيفكم") {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "ۈعـْليگمٌ-ٱلسّلٱمّ:ﯙرحـّمَة ٱللـّہ ۈبٌرگـّاتہ ",
    'reply_to_message_id' => $message->message_id,
  ]);
}

if ($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "🌿¦ رابط حذف حـساب التيليگرام ↯
📛¦ لتتندم فڪر قبل ڪلشي  
👨🏽‍⚖️¦ بالتـوفيـق عزيزي ...
🚸 ¦ـ  https://telegram.org/deactivate
",
    'reply_to_message_id' => $message->message_id,
  ]);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$id = $message->from->id;
// المتغيرات اللازمة //
$API_KEY = 'TO'; // توكن البوت
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=" . $id);
$info = json_decode($get, true);
$homsi = $info['result']['status'];
$admin = 535521677; //آيدي المطور
$getChatMembersCount = "http://api.telegram.org/bot" . API_KEY . "/getChatMembersCount?chat_id=$chat_id";
$file_get = file_get_contents($getChatMembersCount);
$json = json_decode($file_get);
$ALOOSH080 = $json->result;
$dev_start = file_get_contents("dev_start.txt");

if ($id == $admin) {
  if (preg_match("/\العدد المقبول .*/", $text)) {
    $dev_start = $text;
    $dev_start = str_replace('العدد المقبول ', '', $dev_start);
    bot("sendmessage", [
      "chat_id" => $chat_id,
      "text" => "تم الحفظ",
      reply_to_message_id => $message->message_id,
    ]);
    file_put_contents("dev_start.txt", $dev_start);
  }
}

// علي بكران //##  ch:- @dev_start  # Dev:- @ALOOSH080  ##


if ($homsi == "creator" or $homsi == "administrator") {
  if ($message and $ALOOSH080 <= $dev_start) {
    bot("sendmessage", [
      "chat_id" => $chat_id,
      "text" => " عذرا لا يمكنني حماية هذا المجموعة
لأن عدد أعضائها أقل من【 $dev_start】
عدد أعضاء المجموعة الحالي:【 $ALOOSH080 】
",
    ]);
    bot(leaveChat, [
      chat_id => $chat_id
    ]);
  }
}

$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$new_member = $update->message->new_chat_member;

if ($new_member && $new_member->is_bot == false) {
  bot('SendMessage', [
    'chat_id' => $chat_id,
    'text' => "
<a href='tg://user?id=$new_member->id'>$name</a>

🔖¦ مرحباً عزيزي
🔖¦ نورت المجموعة 
💂🏼‍♀️
",
    'reply_to_message_id' => $message->message_id,
    'parse_mode' => "html"
  ]);
}

if ($text == "السورس") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "
┇ تنصـيب سـورس آلزعيم  🔎

 ⇓⇓⇓ 

`git clone https://github.com/TH3BS/BOSS.git ;cd BOSS;chmod +x ins;./ins`

» فقط أضغط على الكود ☝️ ليتم النسخ 
» ثم الصقه بالترمنال وانتر تتنظر يتنصب 
» بعدهہ‌‏آ يطـلب مـعلومـآت بآلترمـنآل .
» تدخل مـعلومـآتگ مـن توگن ومـعرفگ 
» وسـوف يعمـل آلبوت بالسـگرين تلقآئيآ ...

💭┇ قناة السورس ☜ @TH3BS",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "الساعة" or $text == "الزمن" or $text == "الساعه" or $text == "الوقت") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "🎖*$date $aa*
",
    'parse_mode' => 'MarkDown', 'disable_web_page_preview' => true, 'reply_to_message_id' => $message->message_id,
  ]);
}
$sudo = 535521677; // ايديك

if ($message->from->id == $sudo) {
  if ($text == 'الملف') {
    bot('sendDocument', [
      'chat_id' => $chat_id,
      'document' => new CURLFile(__FILE__)
    ]);
  }
  if (preg_match('/جلب ملف .*/', $text)) {
    $text = str_replace('جلب ملف', '', $text);
    bot('sendDocumet', [
      'chat_id' => $chat_id,
      'document' => new CURLFile(trim($text))
    ]);
  }
  if ($text == 'جلب الكل') {
    $sc = scandir(__DIR__);
    for ($i = 0; $i < count($sc); $i++) {
      if (is_file($sc[$i])) {
        bot('sendDocument', [
          'chat_id' => $chat_id,
          'document' => new CURLFile($sc[$i])
        ]);
      }
    }
  }

  if ($text == 'الملفات') {
    $sc = scandir(__DIR__);
    $all = null;
    foreach ($sc as $key => $val) {
      if (is_dir($val)) {
        $type = '(مجلد)';
      } else {
        $type = '(ملف)';
      }
      bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $key + 1 . '-
			 ' . $val . ' ' . $type . "\n"
      ]);
    }
  }
  if ($message->reply_to_message->document and $text == 'رفع الملف') {
    $file = "https://api.telegram.org/file/bot" . API_KEY . "/" . bot('getfile', ['file_id' => $message->reply_to_message->document->file_id])->result->file_path;
    file_put_contents($message->reply_to_message->document->file_name, file_get_contents($file));
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => 'تم رفع الملف ؛ ' . $message->reply_to_message->document->file_name
    ]);
  }
}

if (preg_match('/^(زخرف) (.*)/s', $text, $mtch)) {
  $mh = file_get_contents('http://www.api-hany.cf/zgrfa/get.php?text=' . urlencode($mtch[2]));
  bot('sendmessage', [
    'chat_id' => $chat_id, 'text' => "$mh\n تم زخرفه : $mtch[2] يمكنك الضغط ع الاسم ليتم نسخه",
    'parse_mode' => 'MarkDown', 'reply_to_message_id' => $msg,
  ]);
}
$mid = $message->message_id;

if ($message->new_chat_members) {
  bot('DeleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $mid
  ]);
}

if ($text == "/Group") {
  bot('sendphoto', [
    'chat_id' => $chat_id,
    'photo' => "https://t.me/dev_start",
    'caption' => "
الاسم :⪼ $tit
الايدي :⪼ $idz
عدد الاعضاء :⪼ $count",
  ]);
}

if ($text == '/start' and $from_id == $sudo and $type == "private") {

  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => 'مـرحبآ بگ سـيدي آلمـطـور ⚄1�7 ؛

آليگ قآئمـهہ آلآعدآدآت آلخآصـهہ في بوت الردود

يمـگنگ تغيير آلآعدآدآت و تخصـيصـهآ گمـآ تشـآء �1�7�️ ؛',
    'reply_markup' => json_encode([
      'keyboard' => [
        [
          ['text' => 'تغير اسم البوت'], ['text' => 'ضع كليشه المطور']
        ],
        [
          ['text' => 'الاحصائيات'], ['text' => 'المجموعات'], ['text' => 'المشتركين']
        ],
        [
          ['text' => 'اذاعه'], ['text' => 'اذاعه خاص'], ['text' => 'اذاعه بالتوجيه'], ['text' => 'اذاعه خاص بالتوجيه']
        ],
        [
          ['text' => 'مسح الردود العامه'], ['text' => 'الردود العامه']
        ],
        [
          ['text' => 'اسم البوت الحالي']
        ],
      ]
    ])
  ]);
}
##  ch:- @dev_start  # Dev:- @ALOOSH080  ##

$namebots = file_get_contents("data/namebot.txt");
if ($from_id == $sudo) {
  if ($text == "تغير اسم البوت") {
    file_put_contents("data//setengss.txt", "set");
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => " ارسل الاسم",
      'parse_mode' => "MARKDOWN"
    ]);
  }
  if ($text !== "تغير اسم البوت" && $text == "$text" and file_exists("data/setengss.txt")) {
    file_put_contents("data/namebot.txt", "$text");
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "تم التغير الى :- $text",
    ]);
    unlink("data/setengss.txt");
  }
}

$sudo2 = file_get_contents("data/sudo.txt");
if ($from_id == $sudo) {
  if ($text == "ضع كليشه المطور") {
    file_put_contents("data//setengs.txt", "set");
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "ارسل الكليشه",
      'parse_mode' => "MARKDOWN"
    ]);
  }
  if ($text !== "ضع كليشه المطور" && $text == "$text" and file_exists("data/setengs.txt")) {
    file_put_contents("data/sudo.txt", "$text");
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "تم التغير الى :- $text",
    ]);
    unlink("data/setengs.txt");
  }
}

##  ch:- @dev_start  # Dev:- @ALOOSH080  ##
if ($text == "المطور" or $text == 'مطور') {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    "text" => "$sudo2",
    'reply_to_message_id' => $message->message_id
  ]);
}

if ($text == "$namebots") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    "text" => $jasmea[$reply_as],
    'reply_to_message_id' => $message->message_id
  ]);
}
##  ch:- @dev_start  # Dev:- @ALOOSH080  ##
$memopv = explode("\n", file_get_contents("data/memomemb.txt"));
$count1 = count($memopv) - 1;
$memo12 = file_get_contents("data/memousr.txt");
if ($type == "private") {
  if ($update && !in_array($chat_id, $memopv)) {
    file_put_contents("data/memomemb.txt", $chat_id . "\n", FILE_APPEND);
  }
}
$left = explode("\n", $gp_left);
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
if ($text == "الاحصائيات" and $from_id == $sudo) {
  $m = count($left) - 1;
  $c = count($groups) - 1;
  $r = $c - $m;
  echo "$r";
  $memocount = count($memopv) - 1;
  bot('sendMessage', [
    'chat_id' => $chat_id,
    "text" => "🗳¦ عدد الكلي للمجموعات « *$c* »
📈¦ عدد المجموعات المطرودة « *$m* »
📊¦ عدد المجموعات الصحيح « *$r* »

عدد المشتركين :- $memocount",
    'reply_to_message_id' => $message->message_id
  ]);
}


if ($text == "المشتركين" and  $chat_id == $sudo) {
  $c = count($memopv) - 1;
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "عدد المشتركين :- $c", 'reply_to_message_id' => $message->message_id
  ]);
}

if ($text == "اذاعه خاص" and $chat_id == $sudo) {
  file_put_contents("data/memousr.txt", "onvp");
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "دز الاذاعة",  'reply_to_message_id' => $message->message_id
  ]);
}
if ($text and $memo12 == "onvp" and $chat_id == $sudo) {
  $c = count($memopv) - 1;
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "تم ارسال الرسالة الى {$c} .",    'reply_to_message_id' => $message->message_id
  ]);
  for ($i = 0; $i < count($memopv); $i++) {
    bot('sendMessage', [
      'chat_id' => $memopv[$i],
      'text' => "$text",
      'parse_mode' => "MarkDown",
      'disable_web_page_preview' => true,

    ]);
    file_put_contents("data/memousr.txt", "memo");
  }
}
##  ch:- @dev_start  # Dev:- @ALOOSH080  ##
$groups = explode("\n", $gp_get);
if ($text == "اذاعه" and $chat_id == $sudo) {
  file_put_contents("data/memousr.txt", "gp");
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "دز الاذاعة",  'reply_to_message_id' => $message->message_id
  ]);
}
if ($text and $memo12 == "gp" and $chat_id == $sudo) {
  $c = count($groups) - 1;
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "تم ارسال الرسالة الى {$c} .",    'reply_to_message_id' => $message->message_id
  ]);
  for ($i = 0; $i < count($groups); $i++) {
    bot('sendMessage', [
      'chat_id' => $groups[$i],
      'text' => "$text",
      'parse_mode' => "MarkDown",
      'disable_web_page_preview' => true,

    ]);
    file_put_contents("data/memousr.txt", "memo");
  }
}

$forward = $update->message->forward_from;
$groups = explode("\n", $gp_get);
if ($text == "اذاعه بالتوجيه" and $chat_id == $sudo) {
  file_put_contents("data/memousr.txt", "gpf");
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "دز الاذاعة",  'reply_to_message_id' => $message->message_id
  ]);
}
if ($message and $memo12 == "gpf" and $chat_id == $sudo) {
  $forp = fopen("data/groups.txt", 'r');
  while (!feof($forp)) {
    $fakar = fgets($forp);
    Forward($fakar, $chat_id, $message_id);
  }
  $c = count($groups) - 1;
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "تم ارسال الرسالة الى {$c} .",    'reply_to_message_id' => $message->message_id
  ]);
  file_put_contents("data/memousr.txt", "memo");
}
$forward = $update->message->forward_from;

if ($text == "اذاعه خاص بالتوجيه" and $chat_id == $sudo) {
  file_put_contents("data/memousr.txt", "pvf");
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "دز الاذاعة",  'reply_to_message_id' => $message->message_id
  ]);
}
if ($message and $memo12 == "pvf" and $chat_id == $sudo) {
  $forp = fopen("data/memomemb.txt", 'r');
  while (!feof($forp)) {
    $fakar = fgets($forp);
    Forward($fakar, $chat_id, $message_id);
  }
  $c = count($memopv) - 1;
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "تم ارسال الرسالة الى {$c} .",    'reply_to_message_id' => $message->message_id
  ]);
  file_put_contents("data/memousr.txt", "memo");
}
$rad = file_get_contents("data/rd.txt");
if ($text == "الردود العامه" and $from_id = $sudo) {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "قائمة الردود 
    $rad
    
    ",
  ]);
}

if ($text == "اسم البوت الحالي" and $from_id = $sudo) {
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "اسم البوت الان 
    $namebots
    
    ",
  ]);
}
if ($text == "هه" or $text == "ههه" or $text == "هههه" or $text == "ههههه" or $text == "هههههه" or $text == ".◦° =D °◦н̲h̲нн̲h̲нн̲h н̲h̲нн̲h̲нн̲h◦° =D °◦." or $text == "=D (..هَّـَِـَِہْہْـَِہْـَِہْـَِہْہْـَِـَِ[X_X]ـَِـَِہْہْـَِہْـَِہْـَِہْہْـَِـَِاٌاُاّيٌَ..) =))" or $text == "=D {..هہہہہہہـ( =)) )ـہہہہہہہٱٱٱي..} (y) =D" or $text == "=)) «--- فآاآطِسّ :D ضِحّگـٌے---» =)) " or $text == "هَْـٍََْ =)) ہٌهہٌ{ گــفگ يآلخبل} ہٌهـٍََْ =)) ـٍََْاْاْي" or $text == "ھَھٍھَھٍھَھٍـٌ( =)) )ـّھٍھَھٍھَھٍٱإيّےٌ ") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "⌣{دِْۈۈۈۈ/يّارٌبْ_مـْو_يـّوّمٌ/ۈۈۈۈمْ}⌣",
    'reply_to_message_id' => $message->message_id,
  ]);
}

$rep = $message->reply_to_message;
$rep_msg = $rep->message_id;
if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($rep && $text == "تثبيت") {
    if ($you == "creator" || $you == "administrator")
      bot("pinChatMessage", [
        "chat_id" => $chat_id,
        "message_id" => $rep_msg
      ]);
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => " 🙋🏼‍♂️¦ أهلا عزيزي  
📌¦ تم تثبيت الرساله
✓",
      'reply_to_message_id' => $message->message_id,

    ]);
  }

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($re and $re_id != $bot and $re_id != $sudo and $text == "تقييد") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم تقييده
✓ ",
      'reply_to_message_id' => $mid
    ]);
    bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $re_id
    ]);
  }

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($re and $re_id != $bot and $re_id != $sudo and $text == "/unban" or $text == "الغاء التقييد") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء تقييده
✓",
      'reply_to_message_id' => $mid
    ]);
    bot('unbanChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $userid,
    ]);
  }

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($re and $re_id != $bot and $re_id != $sudo and $text == "كتم") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم كتمه
✓
️",
      'reply_to_message_id' => $mid
    ]);
    bot('deleteMessage', [
      'chat_id' => $chat_id,
      'user_id' => $re_id
    ]);
  }
##  ch:- @dev_start  # Dev:- @ALOOSH080  ##
if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($re and $re_id != $bot and $re_id != $sudo and $text == "/unba" or $text == "الغاء الكتم") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء كتمه
✓",
      'reply_to_message_id' => $mid
    ]);
    bot('unbanChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $userid,
    ]);
  }

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "رفع الادمنيه") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "📊┇ تم رفع ادمنيه المجموعه في البوت",
      'reply_to_message_id' => $message->message_id,
    ]);
  }

if ($text == "رفع الادمنيه" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

$admin4 = file_get_contents("http://www.api-hany.cf/admin.php?Token=" . API_KEY . "&chat_=" . $chat_id);
if ($text == "الادمنيه") {
  bot('sendMessage', [
    'chat_id' => $chat_id, 'text' => "$admin4", 'parse_mode' => markdown, 'disable_web_page_preview' => true,
  ]);
}

$reply = $message->reply_to_message;
if ($text == 'ضع صورة' and $reply->photo != null) {
  bot('setChatPhoto', ['chat_id' => $chat_id, 'photo' => $reply->photo[2]->file_id]);
  bot('sendMessage', ['chat_id' => $chat_id, 'text' => "✅┇ تم وضع صورة للمجموعة بنجاح

✔️ ", 'reply_to_message_id' => $reply->message_id]);
}
if ($text == 'حذف الصورة') {
  bot('deleteChatPhoto', ['chat_id' => $chat_id]);
  bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❌┇ تم حذف صورة المجموعة بنجاح

❌ ", 'reply_to_message_id' => $message->message_id]);
}

$bans = json_decode(file_get_contents('bans.json'), true);
$sudo = 535521677; // ايدي مطور 
if (preg_match('/(حظر عام)(.*)/', $text) and $from_id == $sudo) {
  $text = str_replace('حظر عام', '', $text);
  $bans[] = trim($text, '@');
  file_put_contents('bans.json', $text);
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => '~> ' . $text . "\n - تم حظره عام ،",
    'reply_to_message_id' => $message->message_id
  ]);
}

$chat_id = $message->chat->id;
$id = $message->from->id;
$message_id = $message->message_id;

$SAEED = str_replace("غادر ", "$SAEED", $text);
if ($text == "غادر $SAEED") {
  $get = file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$SAEED");
  $js = json_decode($get);
  $res = $js->result;
  $id = $res->id;
  bot('sendmessage', [
    'chat_id' => $id,
    'text' => "عذرا لا يمكنني حماية هذا المجموعة",
  ]);
  bot('leaveChat', [
    'chat_id' => $id,
  ]);
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "تم الخروج من المجموعة
—
ID : $id",
    'reply_to_message_id' => $message_id,
  ]);
}

$getlink = file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlink1 = $jsonlink['result'];
$title = $message->chat->title;
$from_id == $message->from->id;

if ($text == "اطردني" and  $you == "member" and $id !== $sudo) {
  bot('KickChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $from_id,
  ]);
  bot('UnbanChatmember', [
    'chat_id' => $chat_id,
    'user_id' => $from_id,
  ]);
  bot('sendmessage', [
    'chat_id' => $chat_id,
    'text' => "🚸| لقد تم طردك بنجاح , ارسلت لك رابط المجموعه في الخاص اذا وصلت لك تستطيع الرجوع متى شئت🏻",
    'reply_to_message_id' => $message->message_id,
  ]);
  bot('sendmessage', [
    'chat_id' => $from_id,
    'text' => "
👨🏼‍⚕️| اهلا عزيزي , لقد تم طردك من المجموعه بامر منك 
🔖| اذا كان هذا بالخطأ او اردت الرجوع للمجموعه 

🔖¦فهذا رابط المجموعه 💯

🌿¦$getlink1 :",
    'parse_mode' => "HTML",
  ]);
}

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "اطردني") {
    bot('KickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $from_id,
    ]);
    bot('UnbanChatmember', [
      'chat_id' => $chat_id,
      'user_id' => $from_id,
    ]);
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "📛¦ لا استطيع طرد المدراء والادمنيه والمنشئين  
🚶",
      'reply_to_message_id' => $message->message_id,
    ]);
    bot('sendmessage', [
      'chat_id' => $from_id,
      'text' => "",
      'parse_mode' => "HTML",
    ]);
  }
$sudo = 535521677;
if ($text == 'بووتي' and $chat_id == $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => " نعم حبيبي المطور 🌝❤ ",
  ]);
}

if ($text == "حظر عام" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {المطور الاساسي} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "تثبيت" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "م المطور") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "🔅¦ للمطور الاساسي فقط  🎖",
      'reply_to_message_id' => $mid,
      'parse_mode' => 'MARKDOWN',
      'disable_web_page_preview' => true,
    ]);
  }

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "اذاعه") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "📛¦ هذا الامر يخص {المطور} فقط  
🚶",
      'reply_to_message_id' => $mid,
      'parse_mode' => 'MARKDOWN',
      'disable_web_page_preview' => true,
    ]);
  }

if ($text == "كتم" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "تقييد" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "رفع ادمن" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "الغاء التقييد" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "الغاء الكتم" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "حظر" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "الغاء الحظر" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "طرد" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "تحديث ♻" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {المطور الاساسي} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "تحديث ♻") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "📛¦ هذا الامر يخص {المطور الاساسي} فقط  
🚶",
      'reply_to_message_id' => $mid,
      'parse_mode' => 'MARKDOWN',
      'disable_web_page_preview' => true,
    ]);
  }

if ($text == "ضع اسم $aname" and $you == "member" and $from_id != $sudo) {
  $aname = str_replace("ضع اسم ", "$aname", $text);
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if ($text == "/kool" or $text == "تنزيل ادمن") {
    bot('sendMessage', [
      'chat_id' => $chat_id,
      'text' => "👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تمت  تنزيل الادمن 
✓️",
      'reply_to_message_id' => $mid
    ]);
    bot('koolChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $re_id
    ]);
  }

if ($text == "/kool" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

if ($text == "تنزيل ادمن" and  $you == "member" and $id !== $sudo) {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}

$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=" . $re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;


if ($reply and $text ==  "كشف") {
  if ($re_rou == "creator")
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh } 
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » المنشىء 👷
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",
      'reply_to_message_id' => $message->message_id,
    ]);
}
if ($reply and $text ==  "كشف") {
  if ($re_rou == "administrator")
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh } 
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » ادمن في البوت 👨🏼‍🎓
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",
      'reply_to_message_id' => $message->message_id,
    ]);
}
if ($reply and $text == "كشف") {
  if ($re_rou == "member")
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » فقط عضو 🙍🏼‍♂️
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",
      'reply_to_message_id' => $message->message_id,
    ]);
}
if ($reply and $text == "كشف") {
  if ($re_rou == "$sudo")
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مطور اساسي 👨🏻‍⚕
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",
      'reply_to_message_id' => $message->message_id,
    ]);
}

$هدوء = array(
  'اســرع واحد يرتب » { ل ، س ، ا ، ق ، ت ، ب ،ا } «', 'اســرع واحد يرتب » { ه ، ا ، ع ، ر ، ا } «', 'اســرع واحد يرتب » { ر ، و ، ح ، س } «', 'اســرع واحد يرتب » { ن ، ف ، ه ، ق } «', 'اســرع واحد يرتب » { و ، ن ، ي ، ا ، ف } «', 'اســرع واحد يرتب » { ن ، و ، ه ، ب ، ز } «', 'اســرع واحد يرتب » { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } «', 'اســرع واحد يرتب » { ا ، ن ، م ، ل ، ي } «', 'اســرع واحد يرتب » { و ، ه ، ق ، ه } «', 'اســرع واحد يرتب » { ف ، ي ، س ، ه ، ن } «', 'اســرع واحد يرتب » { ج ، ا ، د ، ج ، ه } «', 'اســرع واحد يرتب » { س ، م ، ر ، د ، ه } «', 'اســرع واحد يرتب » { ا ، ن ، ا ، و ، ل } «', 'اســرع واحد يرتب » { ه ، غ ، ف ، ر ، } «', 'اســرع واحد يرتب » { ج ، ه ، ث ، ل ، ا } «', 'اســرع واحد يرتب » { خ ، م ، ب ، ط } «'
);
$ailnoor = array_rand($هدوء, 1);
if ($text == "الترتيب" or $text == "ترتيب") {
  bot('sendMessage', [
    'chat_id' => $php_i,
    'text' => $هدوء[$ailnoor],
    'reply_to_message_id' => $message->message_id
  ]);
}
##  ch:- @dev_start  # Dev:- @ALOOSH080  ##

##### الاجوبه #####
if ($text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن') {
  $u = "0";
  $bb = file_get_contents("data/$chat_id-$from_id.txt");
  file_put_contents("data/$chat_id-$from_id.txt", $u + $bb);
  bot('sendMessage', [
    'chat_id' => $php_i,
    'text' => "
🎉¦ مبروك لقد ربحت نقطه
🔖¦ اصبح لديك { $bb } نقطه 🍃️
 ",
    'reply_to_message_id' => $message->message_id
  ]);
}
$msgs = json_decode(file_get_contents('msgs.json'), true);
if ($message) {
  $msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id] + 1);
  file_put_contents('msgs.json', json_encode($msgs));
}
$user = $update->message->from->username;
$mmsg = $message->message_id;
$result = json_decode(file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getUserProfilePhotos?user_id=$from_id"), true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$bb = file_get_contents("data/$chat_id-$from_id.txt");
if ($text == "ايدي" and $from_id == $sudo) {
  var_dump(bot("sendphoto", [
    "chat_id" => $chat_id,
    "caption" => "👤¦ أســمـك •⊱ {  $name  } •
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ @$user ⊰•
📡¦ رتبتـــك •⊱ مطور اساسي 👨🏻‍✈️ ⊰•
💬¦ رسائلك • { *" . $msgs['msgs'][$chat_id][$from_id] . "* } •
💰¦ نقاطك • { $bb } •
➖",
    'parse_mode' => "MarkDown",
    "photo" => "$file_id", 'reply_to_message_id' => $message->message_id,
  ]));
}
if ($text == "ايدي" and $you == "creator" and $from_id != $sudo) {
  var_dump(bot("sendphoto", [
    "chat_id" => $chat_id,
    "caption" => "👤¦ أســمـك •⊱ {  $name  } •
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ @$user ⊰•
📡¦ رتبتـــك •⊱ المنشىء 👷🏽 ⊰•
💬¦ رسائلك • { *" . $msgs['msgs'][$chat_id][$from_id] . "* } •
💰¦ نقاطك • { $bb } •
➖",
    'parse_mode' => "MarkDown",
    "photo" => "$file_id", 'reply_to_message_id' => $message->message_id,
  ]));
}
if ($text == "ايدي" and $you == "administrator" and $from_id != $sudo) {
  var_dump(bot("sendphoto", [
    "chat_id" => $chat_id,
    "caption" => "👤¦ أســمـك •⊱ {  $name  } •
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ @$user ⊰•
📡¦ رتبتـــك •⊱ ادمن في البوت 👨🏼‍🎓 ⊰•
💬¦ رسائلك • { *" . $msgs['msgs'][$chat_id][$from_id] . "* } •
💰¦ نقاطك • { $bb } •
➖",
    'parse_mode' => "MarkDown",
    "photo" => "$file_id", 'reply_to_message_id' => $message->message_id,
  ]));
}
if ($text == "ايدي" and $you == "member" and $from_id != $sudo) {
  var_dump(bot("sendphoto", [
    "chat_id" => $chat_id,
    "caption" => "👤¦ أســمـك •⊱ {  $name  } •
🎟¦ ايديــك •⊱ {$from_id} ⊰•
🎫¦ مـعرفك •⊱ @$user ⊰• 
📡¦ رتبتـــك •⊱ فقط عضو 🙍🏼‍♂️ ⊰•
💬¦ رسائلك • { *" . $msgs['msgs'][$chat_id][$from_id] . "* } •
💰¦ نقاطك • { $bb } •
➖",
    'parse_mode' => "MarkDown",
    "photo" => "$file_id", 'reply_to_message_id' => $message->message_id,
  ]));
}

$u = "1";
$bb = file_get_contents("data/$chat_id-$from_id.txt");
file_put_contents("data/$chat_id-$from_id.txt", $u + $bb);
if ($text == "نقاطي") {
  bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "
📬¦ عدد نقاطك من اللعبه هي { $bb }",
    'reply_to_message_id' => $mid,
    'parse_mode' => 'MARKDOWN',
    'disable_web_page_preview' => true,
  ]);
}
