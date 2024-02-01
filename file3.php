<?php

$forwardM=json_decode(file_get_contents("forwardM.json"),1);
$Js=json_decode(file_get_contents("Js.json"),1);
$Ds=json_decode(file_get_contents("Ds.json"),1);
$Vs=json_decode(file_get_contents("Users/Vs.json"),1);

function Add($path, $content)
{
	$file = fopen("$path", "a") or die("Unable to open file!");
	fwrite($file, "$content");
	fclose($file);
}
function GetUpdates($offset = null, $limit = 1, $timeout = null, $allowed_updates = [])
{
	return bot('getUpdates', [
		'offset' => $offset,
		'limit' => $limit,
		'timeout' => $timeout,
		'allowed_updates' => $allowed_updates
	]);
}
function SetWebhook($url, $certificate = null, $max_connections = 1, $allowed_updates = [])
{
	return bot('setWebhook', [
		'url' => $url,
		'certificate' => $certificate,
		'max_connections' => $max_connections,
		'allowed_updates' => $allowed_updates,
	]);
}
function DeleteWebhook()
{
	return bot('deleteWebhook');
}
function GetWebhookInfo()
{
	return bot('getWebhookInfo');
}
function SendChatAction($chat_id, $action)
{
	bot('sendChatAction', [
		'chat_id' => $chat_id,
		'action' => $action
	]);
}
function SendMessage($chat_id, $text, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendMessage', [
		'chat_id' => $chat_id,
		'text' => $text,
		'parse_mode' => $parse_mode,
		'disable_web_page_preview' => $disable_web_page_preview,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function ForwardMessage($chat_id, $from_chat_id, $message_id)
{
	return bot('forwardMessage', [
		'chat_id' => $chat_id,
		'from_chat_id' => $from_chat_id,
		'disable_notification' => false,
		'message_id' => $message_id
	]);
}
function SendPhoto($chat_id, $photo, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendPhoto', [
		'chat_id' => $chat_id,
		'photo' => $photo,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendAudio($chat_id, $audio, $caption = null, $parse_mode = "MARKDOWN", $duration = null, $performer = null, $title = null, $thumb = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendAudio', [
		'chat_id' => $chat_id,
		'audio' => $audio,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'duration' => $duration,
		'performer' => $performer,
		'title' => $title,
		'thumb' => $thumb,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendDocument($chat_id, $document, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendDocument', [
		'chat_id' => $chat_id,
		'document' => $document,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVideo($chat_id, $video, $duration = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null, $supports_streaming = null)
{
	return bot('sendVideo', [
		'chat_id' => $chat_id,
		'video' => $video,
		'duration' => $duration,
		'width' => $width,
		'height' => $height,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'supports_streaming' => $supports_streaming,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendAnimation($chat_id, $animation, $duration = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendAnimation', [
		'chat_id' => $chat_id,
		'animation' => $animation,
		'duration' => $duration,
		'width' => $width,
		'height' => $height,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVoice($chat_id, $voice, $caption = null, $parse_mode = "MARKDOWN", $duration = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendVoice', [
		'chat_id' => $chat_id,
		'voice' => $voice,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'duration' => $duration,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVideoNote($chat_id, $video_note, $duration = null, $length = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendVideoNote', [
		'chat_id' => $chat_id,
		'video_note' => $video_note,
		'duration' => $duration,
		'length' => $length,
		'thumb' => $thumb,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendMediaGroup($chat_id, $media, $reply_to_message_id = null)
{
	return bot('sendMediaGroup', [
		'chat_id' => $chat_id,
		'media' => $media,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id
	]);
}
function SendLocation($chat_id, $latitude, $longitude, $live_period = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendLocation', [
		'chat_id' => $chat_id,
		'latitude' => $latitude,
		'longitude' => $longitude,
		'live_period' => $live_period,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendContact($chat_id, $phone_number, $first_name, $last_name = null, $reply_to_message_id = null, $reply_markup = null, $vcard = null)
{
	return bot('sendContact', [
		'chat_id' => $chat_id,
		'phone_number' => $phone_number,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'vcard' => $vcard,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendPoll($chat_id, $question, $options, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendPoll', [
		'chat_id' => $chat_id,
		'question' => $question,
		'options' => $options,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function GetUserProfilePhotos($user_id, $offset = null, $limit = null)
{
	return bot('getUserProfilePhotos', [
		'user_id' => $user_id,
		'offset' => $offset,
		'limit' => $limit
	]);
}
function GetFile($file_id)
{
	return bot('getFile', [
		'file_id' => $file_id
	]);
}
function File_path($file_path)
{
	$info = file_get_contents("https://api.telegram.org/file/bot" . API_KEY . "/" . $file_path);
	return $info;
}
function KickChatMember($chat_id, $user_id, $until_date = null)
{
	return bot('kickChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'until_date' => $until_date
	]);
}
function UnKickChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
	]);
}
function PromoteChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
		'can_delete_messages' => true,
		'can_invite_users' => true,
		'can_restrict_members' => true,
		'can_pin_messages' => true,
	]);
}
function RestrictChatMember($chat_id, $user_id)
{
	return bot('restrictChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => false,
		'can_send_media_messages' => false,
		'can_invite_users' => false,
		'can_send_other_messages' => false,
	]);
}
function UnRestrictChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
		'can_send_media_messages' => true,
		'can_send_other_messages' => true,
	]);
}
function DemoteChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_change_info' => false,
		'can_post_messages' => false,
		'can_edit_messages' => false,
		'can_delete_messages' => false,
		'can_invite_users' => false,
		'can_restrict_members' => false,
		'can_pin_messages' => false,
		'can_promote_members' => false
	]);
}
function ExportChatInviteLink($chat_id)
{
	return bot('exportChatInviteLink', [
		'chat_id' => $chat_id
	]);
}
function SetChatPhoto($chat_id, $photo)
{
	return bot('setChatPhoto', [
		'chat_id' => $chat_id,
		'photo' => $photo
	]);
}
function DeleteChatPhoto($chat_id)
{
	return bot('deleteChatPhoto', [
		'chat_id' => $chat_id
	]);
}
function SetChatTitle($chat_id, $title)
{
	return bot('setChatTitle', [
		'chat_id' => $chat_id,
		'title' => $title
	]);
}
function SetChatDescription($chat_id, $description)
{
	return bot('setChatDescription', [
		'chat_id' => $chat_id,
		'description' => $description
	]);
}
function PinChatMessage($chat_id, $message_id)
{
	return bot('pinChatMessage', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'disable_notification' => false
	]);
}
function UnpinChatMessage($chat_id)
{
	return bot('unpinChatMessage', [
		'chat_id' => $chat_id,
	]);
}
function LeaveChat($chat_id)
{
	return bot('LeaveChat', [
		'chat_id' => $chat_id
	]);
}
function GetChat($chat_id)
{
	return bot('getChat', [
		'chat_id' => $chat_id
	]);
}
function GetChatAdministrators($chat_id)
{
	return bot('getChatAdministrators', [
		'chat_id' => $chat_id
	]);
}
function GetChatMembersCount($chat_id)
{
	return bot('getChatMembersCount', [
		'chat_id' => $chat_id
	]);
}
function GetChatMember($chat_id, $user_id)
{
	return bot('getChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id
	]);
}
function AnswerCallbackQuery($callback_query_id, $text, $show_alert = false, $url = null, $cache_time = 0)
{
	return bot('answerCallbackQuery', [
		'callback_query_id' => $callback_query_id,
		'text' => $text,
		'show_alert' => $show_alert,
		'url' => $url,
		'cache_time' => $cache_time
	]);
}
function EditMessageText($chat_id, $message_id, $text, $inline_message_id = null, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_markup = null)
{
	return bot('editMessageText', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'text' => $text,
		'parse_mode' => $parse_mode,
		'disable_web_page_preview' => $disable_web_page_preview,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageCaption($chat_id, $message_id, $caption, $inline_message_id = null, $parse_mode = "MARKDOWN", $reply_markup = null)
{
	return bot('editMessageCaption', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageMedia($chat_id, $message_id, $media, $inline_message_id = null, $parse_mode = "MARKDOWN", $reply_markup = null)
{
	return bot('editMessageMedia', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'media' => $media,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageReplyMarkup($chat_id, $message_id, $reply_markup, $inline_message_id = null)
{
	return bot('editMessageReplyMarkup', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'reply_markup' => $reply_markup
	]);
}
function StopPoll($chat_id, $message_id, $reply_markup = null)
{
	return bot('stopPoll', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'reply_markup' => $reply_markup
	]);
}
function DeleteMessage($chat_id, $message_id)
{
	return bot('deletemessage', [
		'chat_id' => $chat_id,
		'message_id' => $message_id
	]);
}
function SendSticker($chat_id, $sticker, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendSticker', [
		'chat_id' => $chat_id,
		'sticker' => $sticker,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function AnswerInlineQuery($inline_query_id, $results, $cache_time = 0, $is_personal = false, $next_offset = null, $switch_pm_text = null, $switch_pm_parameter = null)
{
	return bot('answerInlineQuery', [
		'inline_query_id' => $inline_query_id,
		'results' => $results,
		'cache_time' => $cache_time,
		'is_personal' => $is_personal,
		'next_offset' => $next_offset,
		'switch_pm_text' => $switch_pm_text,
		'switch_pm_parameter' => $switch_pm_parameter
	]);
}
function SendGame($chat_id, $game_short_name, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendGame', [
		'chat_id' => $chat_id,
		'game_short_name' => $game_short_name,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function InlineKeyBoard($inlinetext = [], $type, $contents = [], $standar = "column", $count = 1)
{
	for ($i = 0; $i < $count; $i++) {

		$text     = $inlinetext[$i];
		$content = $contents[$i];

		if ($standar == "column") {
			$keyboard['inline_keyboard'][] = [['text' => $text, $type => $content]];
		}
		if ($standar == "row") {
			$keyboard['inline_keyboard'][] = [['text' => $inlinetext[$i], $type => $contents[$i]], ['text' => $inlinetext[++$i], $type => $contents[$i]]];
		}
	}
	$inline = json_encode($keyboard);
	return $inline;
}
function KeyBoard($keytext = [], $standar = "column", $count = 1)
{
	for ($i = 0; $i < $count; $i++) {

		$text = $keytext[$i];

		if ($standar == "column") {
			$keyboard['keyboard'][] = [['text' => $text]];
		}
		if ($standar == "row") {
			$keyboard['keyboard'][] = [['text' => $keytext[$i]], ['text' => $keytext[++$i]]];
		}
	}
	$resize_keyboard = json_encode($keyboard);
	return $resize_keyboard;
}
function myZip($myZip1, $myZip2)
{
	$myZip4 = realpath($myZip1);
	$myZip = new ZipArchive();
	$myZip->open($myZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
	$myZip3 = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator($myZip4),
		RecursiveIteratorIterator::LEAVES_ONLY
	);
	foreach ($myZip3 as $myZip5 => $myZip6) {
		if (!$myZip6->isDir()) {
			$myZip7 = $myZip6->getRealPath();
			$myZip8 = substr($myZip7, strlen($myZip4) + 1);
			$myZip->addFile($myZip7, $myZip8);
		}
	}
	$myZip->close();
}

function myZip1($myZip9, $myZip10 = 2)
{
	$myZip11 = array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
	$myZip12 = floor((strlen($myZip9) - 1) / 3);
	return sprintf("%.{$myZip10}f", $myZip9 / pow(1024, $myZip12)) . @$myZip11[$myZip12];
}

function GetMe()
{
	return bot('getMe');
}

function Slin($a){
$P=GetChat($a)->result;
if($P->username==null){
if($P->invite_link!=null){
$d=$P->invite_link;$tc="خاصه";
}else{
$d=ExportChatInviteLink($a)->result;$tc="خاصه";
}
}else{$d="t.me/".$P->username;$tc="عامه";} 
return $d;}


if (!is_dir("Users")) { // used to make dir
mkdir("Users");
}
function isthere($path) // check member.txt & chat.txt & allchat.txt
{
$exx = explode("\n", file_get_contents($path));
return $exx;
}

$update     = json_decode(file_get_contents('php://input'));

if (isset($update)) {

	$bot = GetMe()->result;
	$botid = $IDBot;
	$botname = $bot->first_name;
	$botusername = $bot->username;

	$message      = $update->message;
	$data         = $update->callback_query->data;
	$edit         = $update->edited_message;
	$inline_query = $update->inline_query->query;

	if ($message) {

		$date                  = $message->date;
		$message_id            = $message->message_id;
		$text                  = $message->text;
		$chat_id               = $message->chat->id;
		$from_id               = $message->from->id;
		$reply                 = $message->reply_to_message;
		$reply_id              = $message->reply_to_message->from->id;
		$reply_user            = $message->reply_to_message->from->username;
		$reply_message_id      = $message->reply_to_message->message_id;
		$reply_caption         = $message->reply_to_message->caption;
		$reply_audio           = $message->reply_to_message->audio;
		$reply_audio_file_id   = $message->reply_to_message->audio->file_id;
		$reply_audio_size      = $message->reply_to_message->audio->file_size;
		$forward               = $message->forward_from;
		$forward_id            = $forward->id;
		$forward_username      = $forward->username;
		$chat_forward          = $message->forward_from_chat;
		$chat_forward_id       = $chat_forward->id;
		$chat_forward_username = $chat_forward->username;
		$chat_forward_title    = $chat_forward->title;
		$chat_forward_type     = $chat_forward->type;
		$username              = $message->from->username;
		$type                  = $message->chat->type;
		$itprivate             = $type == "private";
		$itchannel             = $type == "channel";
		$itsupergroup          = $type == "supergroup";
		$itgroup               = $type == "group";
		$group_title           = $message->chat->title;
		$name                  = $message->from->first_name;
		$name_tag              = "[ • $name • ](tg://user?id=$from_id)";
		$name_reply            = $message->reply_to_message->from->first_name;
		$name_tag_reply        =  "[$name_reply](tg://user?id=$reply_id)";
		$audio                 = $message->audio;
		$audio_file_id         = $message->audio->file_id;
		$video                 = $message->video;
		$video_file_id         = $message->video->file_id;
		$voice                 = $message->voice;
		$voice_file_id         = $message->voice->file_id;
		$photo                 = $message->photo;
		$photo_file_id         = $message->photo[0]->file_id;
		$sticker               = $message->sticker;
		$sticker_file_id       = $message->sticker->file_id;
		$contact               = $message->contact;
		$contact_number        = $message->contact->phone_number;
		$contact_name          = $message->contact->first_name;
		$video_note            = $message->video_note;
		$video_note_file_id    = $message->video_note->file_id;
		$document              = $message->document;
		$document_name         = $document->file_name;
		$document_file_id      = $document->file_id;
		$gif                   = $message->animation;
		$gif_file_id           = $message->animation->file_id;
		$pin                   = $message->pinned_message;
		$pin_id                = $message->pinned_message->from->id;
		$pin_first_name        = $message->pinned_message->from->first_name;
		$pin_tag               = "[$pin_first_name](tg://user?id=$pin_id)";
		$inline                = $message->reply_markup->inline_keyboard;
		$entities              = $message->entities;
		$location              = $message->location;
		$location_file_id      = $message->location->file_id;
		$new_chat              = $message->new_chat_member;
		$left_chat             = $message->left_chat_member;
		$new_id                = $new_chat->id;
		$left_id               = $left_chat->id;
		$left_name             = $left_chat->first_name;
		$checkbots             = GetChatMember($chat_id, $new_id)->result->user->is_bot;
	} elseif ($data) {
                $username =             $update->callback_query->from->username;
		$date                  = $update->callback_query->date;
		$chat_id               = $update->callback_query->message->chat->id;
		$from_id               = $update->callback_query->message->reply_to_message->from->id;
		$message_id            = $update->callback_query->message->message_id;
		$from_id               = $update->callback_query->from->id;
		$name                  = $update->callback_query->from->first_name;
		$name_tag              = "[$name](tg://user?id=$from_id)";
	} elseif ($edit) {

		$from_id               = $update->edited_message->from->id;
		$chat_id               = $update->edited_message->chat->id;
		$message_id            = $update->edited_message->message_id;
		$name                  = $update->edited_message->from->first_name;
		$name_tag              = "[$name_edit](tg://user?id=$edit_from_id)";
	} elseif ($inline_query) {
		$inline_query_id = $update->inline_query->id;
	}
} #End of $update isset
if($from_id != $chat_id){return false;}
function SV($a,$b){file_put_contents($a,json_encode($b,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));}
$webhost = "https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']; //مسار ملفك من الاستضافه
$path= "Users"; # مسار مجلد الخزن 
if($Js['bot']['startB']==null){$Js['bot']['startB']=0;SV("Js.json",$Js);} 
$startB=$Js['bot']['startB']; 
$Members = count(isthere("$path/member.txt")) - 1;
$Groups= count(isthere("$path/chat.txt")) - 1;
$allchat = count(isthere("$path/allchat.txt")) - 1;

if(in_array($data,['br:forwardmessage:p','br:forwardmessage:g','br:forwardmessage:all','br:copymessage:p','br:copymessage:g','br:copymessage:all'])){
$button =['رجوع']; $keys = ['broDa']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif(!$data or !in_array($data,['DelV1','AddT1','DTT','Pbroadcast','Gbroadcast','Fbroadcast','FGbroadcast','Aban','Admin','SubK','addfake','Dfake','addch','Dch'])){
$button = ['رجوع']; $keys = ['cancel']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}
$buttn = ['الغاء الاذاعه','رجوع']; $kes = ['caBr','broDa']; $keyboar2 = InlineKeyBoard($buttn, 'callback_data', $kes, 'column', 2);
//****
$keyboard=json_encode(['inline_keyboard'=>[
[['text'=>"قسم الاذاعه ",'callback_data'=>"broDa"]], 
]]);

//****
$keyboardB=json_encode(['inline_keyboard'=>[
[['text'=>"تثبيت الاذاعه : ".$Js['bot']['TBr'],'callback_data'=>"TBr"]], 
[['text'=>"اذاعه خاص 📢",'callback_data'=>"br:copymessage:p"],['text'=>"توجيه خاص 🔄",'callback_data'=>"br:forwardmessage:p"]], 
[['text'=>"اذاعه كروبات 📢",'callback_data'=>"br:copymessage:g"],['text'=>"توجيه كروبات 🔄",'callback_data'=>"br:forwardmessage:g"]], 
[['text'=>"اذاعه للكل 📢",'callback_data'=>"br:copymessage:all"],['text'=>"توجيه للكل 🔄",'callback_data'=>"br:forwardmessage:all"]],
[['text'=>"رجوع",'callback_data'=>"paneel"]]]]);
//****



function txt($path, $contents, $options = null)
{
file_put_contents($path, $contents, $options);
}
function get($path)
{
return file_get_contents($path);
}
function CurlGetContents($url){
$header = array('Accept-Language: en');
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$data = curl_exec($curl);
curl_close($curl);
return $data;
}

if (file_exists($path . "/count.json")) {
$g = explode("-", file_get_contents($path . "/info.txt"));
$gQ=$g[2]; 
$gW=$g[3]; 
$gE=$g[4]; 
}
function CopyMessage($chat_id,$from,$msg){
return bot('CopyMessage',[
'chat_id'=>$chat_id,
'from_chat_id'=>$from,
'message_id'=>$msg, 
'disable_web_page_preview' =>true,
'parse_mode' =>"markdown",
]);
} 
function broadcast($to,$type,$pin){
$path=$GLOBALS['path']; 
$Js=json_decode(file_get_contents("Js.json"),1);
$x=$Js['bot']['startB']; 
$e=$x+50;
if($to=="p"){
$ids=explode("\n",file_get_contents("$path/member.txt")); 
} elseif($to=="g"){
$ids=explode("\n",file_get_contents("$path/chat.txt")); 
} elseif($to=="all"){
$ids=explode("\n",file_get_contents("$path/allchat.txt")); 
}
$xv=$GLOBALS['message_id']+1; 
txt("$path/count.json",$e); 
txt("$path/info.txt",$GLOBALS['from_id']."-".$GLOBALS['message_id']."-".$to."-".$type."-".$pin."-".$xv); 
for($i=$x;$i<$e;$i++){
if($type=="copymessage"){
$w=CopyMessage($ids[$i],$GLOBALS['chat_id'],$GLOBALS['message_id']); 
$q=$w->result->message_id; 
}elseif($type=="forwardmessage"){
$w=ForwardMessage($ids[$i], $GLOBALS['chat_id'], $GLOBALS['message_id']);
$q=$w->result->message_id; 
} 
if($pin==true){
bot('pinchatMessage', [
'chat_id'=>$ids[$i],
'message_id'=>$q,
]);
} 
if($w->ok==true and !in_array($ids[$i],isthere("$path/true.txt"))){
file_put_contents("$path/true.txt",$ids[$i]."\n",FILE_APPEND); 
}
EditMessageText($GLOBALS['chat_id'],$xv,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
} 
file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
} 
function Mbroadcast($to,$type,$pin){
$path=$GLOBALS['path']; 
$we=file_get_contents("$path/info.txt"); 
$wa=explode("-",$we);
$sudo_c=$wa[0]; 
$msg_c=$wa[1]; 
$xv=end($wa); 
$Js=json_decode(file_get_contents("Js.json"),1);
$x=file_get_contents("$path/count.json"); 
$e=$x+50;
if($to=="p"){
$ids=explode("\n",file_get_contents("$path/member.txt")); 
} elseif($to=="g"){
$ids=explode("\n",file_get_contents("$path/chat.txt")); 
}elseif($to=="all"){
$ids=explode("\n",file_get_contents("$path/allchat.txt")); 
}
if($Js['bot']['startB']==0){
$count= count($ids)-1;
}else{
$count= count($ids)-$Js['bot']['startB']-1;
} 
$ko=count(explode("\n",file_get_contents("$path/true.txt")))-1; 
$ki=$count-$ko; 
if (file_exists($path . "/count.json")) {
if ($e >= count($ids)- 1 + 50) {
EditMessageText($sudo_c,$xv, "
تم الاذاعه بنجاح ✅
",null, "MARKDOWN", true,json_encode(['inline_keyboard'=>[[['text'=>"الصفحه الرئيسيه",'callback_data'=>"paneel"]]]]));
SendMessage($sudo_c, "
تم الاذاعه لـ*$count* عضو


عدد الحقيقي : *$ko*

عدد الوهمي : *$ki*
", "MARKDOWN", true,$xv,json_encode(['inline_keyboard'=>[[['text'=>"الصفحه الرئيسيه",'callback_data'=>"paneel"]]]]));
unlink($path . "/count.json");
unlink($path . "/info.txt");
unlink($path . "/true.txt");
exit;
} } 

txt("$path/count.json",$e); 
for($i=$x;$i<$e;$i++){
if($type=="copymessage"){
$w=CopyMessage($ids[$i],$sudo_c,$msg_c); 
$q=$w->result->message_id; 
}elseif($type=="forwardmessage"){
$w=ForwardMessage($ids[$i], $sudo_c, $msg_c);
$q=$w->result->message_id; 
} 
if($pin==true){
bot('pinchatMessage', [
'chat_id'=>$ids[$i],
'message_id'=>$q,
]);
} 
if($w->ok==true and !in_array($ids[$i],isthere("$path/true.txt"))){
file_put_contents("$path/true.txt",$ids[$i]."\n",FILE_APPEND); 
}
EditMessageText($sudo_c,$xv,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
} 
header("refresh:10");
file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);

} 

if(!$update){
if($gQ!=null){
Mbroadcast($gQ,$gW,$gE); 
} 

} 

 
if($data=="TBr"){
if($Js['bot'][$data]=="✅"){
$Js['bot'][$data]="❌";SV("Js.json",$Js);
}else{
$Js['bot'][$data]="✅";SV("Js.json",$Js);
}
$kk=json_encode(['inline_keyboard'=>[
[['text'=>"تثبيت الاذاعه : ".$Js['bot']['TBr'],'callback_data'=>"TBr"]], 
[['text'=>"اذاعه خاص 📢",'callback_data'=>"br:copymessage:p"],['text'=>"توجيه خاص 🔄",'callback_data'=>"br:forwardmessage:p"]], 
[['text'=>"اذاعه كروبات 📢",'callback_data'=>"br:copymessage:g"],['text'=>"توجيه كروبات 🔄",'callback_data'=>"br:forwardmessage:g"]], 
[['text'=>"اذاعه للكل 📢",'callback_data'=>"br:copymessage:all"],['text'=>"توجيه للكل 🔄",'callback_data'=>"br:forwardmessage:all"]], 
[['text'=>"رجوع",'callback_data'=>"cancel"]]]]);
EditMessageReplyMarkup($chat_id, $message_id,$kk); 
}


//قسم الاذاعه
if($data=="broDa"){
if (file_exists("$path/broadcast$chat_id.txt")) :
unlink("$path/broadcast$chat_id.txt");
unlink("$path/type$chat_id.txt");
endif;
EditMessageText($chat_id,$message_id,"اهلا بك في قسم الاذاعه",null,"markdown",true,$keyboardB);
}
if($data=="caBr"){
unlink($path . "/count.json");
unlink($path . "/true.txt");
unlink($path . "/info.txt");
EditMessageText($chat_id,$message_id,"تم الغاء الاذاعه ✅",null,"markdown",true,$keyboard2);
} 
if (strpos($data, ':') !== false) {
        $exx = explode(':', $data);
        if ($exx[0] == 'br') {
            $keyboard = json_encode(['inline_keyboard' => [[['text' => "رجوع", 'callback_data' => "cancel"]]]]);
            $dat = ['chat_id' => $from_id, 'text' => "حسنا عزيزي ارسل رسالتك 📎 ", 'message_id' => $message_id, 'parse_mode' => "MarkDown", 'reply_markup' => $keyboard];
            bot("editMessageText", $dat);
            $Js['broadcast']['ok'] = true;
            $Js['broadcast']['type'] = $exx[1];
            $Js['broadcast']['to'] = $exx[2];
            SV("Js.json", $Js);
        }
    }
    if ($Js['broadcast']['ok']==true and !$data and $message) {
   SendMessage($chat_id,"جاري الاذاعه.. ",null,null,$message_id); 
     if ($Js['broadcast']['to'] == 'p') {
        	if($Js['bot']['TBr']!="✅"){
            broadcast($Js['broadcast']['to'],$Js['broadcast']['type'],false);
            }else{
broadcast($Js['broadcast']['to'],$Js['broadcast']['type'],true);
} 
        } elseif ($Js['broadcast']['to'] == 'g') {
        	if($Js['bot']['TBr']!="✅"){
            broadcast($Js['broadcast']['to'],$Js['broadcast']['type'],false);
   }else{
   	broadcast($Js['broadcast']['to'],$Js['broadcast']['type'],true);
} 

 } elseif ($Js['broadcast']['to'] == 'all') {
        	if($Js['bot']['TBr']!="✅"){
            broadcast($Js['broadcast']['to'],$Js['broadcast']['type'],false);
   }else{
   	broadcast($Js['broadcast']['to'],$Js['broadcast']['type'],true);
} 


     }
        $Js['broadcast']['ok'] = false;
        $Js['broadcast']['type'] = '.';
        $Js['broadcast']['to'] = '.';
        SV("Js.json", $Js);
    }
//قسم الاذاعه




if ($message) { // used to check members and save them
if (!in_array($from_id, isthere("$path/member.txt"))) {
if ($itprivate) {
file_put_contents("$path/member.txt", "$from_id\n", FILE_APPEND);
file_put_contents("$path/allchat.txt", "$from_id\n", FILE_APPEND);
}}}
if (!in_array($chat_id, isthere("$path/chat.txt"))) {
if($itgroup or $itsupergroup ){
file_put_contents("$path/chat.txt","$chat_id\n", FILE_APPEND);
file_put_contents("$path/allchat.txt","$chat_id\n", FILE_APPEND);}

}
if ($update->channel_post and !in_array($update->channel_post->chat->id,
 explode("\n",file_get_contents("Users/chat.txt"))
 
 )) {
if($update->channel_post->sender_chat->type=="channel"){
file_put_contents("Users/chat.txt",$update->channel_post->chat->id."\n", FILE_APPEND);
file_put_contents("Users/allchat.txt",$update->channel_post->chat->id."\n", FILE_APPEND);}

}
if($text=="/start" and !in_array($chat_id,$sudos) and !in_array($from_id, $Js['bot']['admin']) and $type=="private" and $Js['bot']['ads']!=null){
$u=json_decode($Js['bot']['ads']);
if(!in_array($chat_id,$Vs['ads']['adss'])){
if(!isset($u->message->reply_markup)){
SendMessage($chat_id,$u->message->text,null,null);
}else{
SendMessage($chat_id,$u->message->text,null,null,null,json_encode($u->message->reply_markup));
}
$Vs['ads']['adss'][]=$chat_id;
SV("$path/Vs.json",$Vs); 
}
}


?>

echo "➖➖➖➖➖➖➖➖➖➖
🌎 𝚃𝙷𝙴 𝙵𝙸𝙻𝙴 𝚆𝙰𝚂 𝚆𝚁𝙸𝚃𝚃𝙴𝙽 𝙱𝚈: @V_P_E 
➖➖➖➖➖➖➖➖➖➖
🌎 𝙵𝙾𝙻𝙻𝙾𝚆 𝚄𝚂: @E_G_Y_0 
➖➖➖➖➖➖➖➖➖➖
👁 𝙿𝙰𝚁𝚃𝙸𝙲𝙸𝙿𝙰𝚃𝙸𝙾𝙽 𝙸𝚂 𝙰𝙻𝙻𝙾𝚆𝙴𝙳 𝙰𝙽𝙳 𝙳𝙾 𝙽𝙾𝚃 𝚃𝙰𝙼𝙿𝙴𝚁 𝚆𝙸𝚃𝙷 𝙼𝚈 𝚁𝙸𝙶𝙷𝚃𝚂
➖➖➖➖➖➖➖➖➖➖";