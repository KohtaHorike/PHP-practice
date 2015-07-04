<?php
	$age = "0";
	$sex = "0";
	$travel="1";
	$seasia = array();
	$imp = "";
	$wannago = "0";
	$reason="";
	$imp="";
	$bestpls="0";
	$hname="";
	$email="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	echo "成功";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>アンケート</title>
	<style>
		p{
			margin: 0;
			padding: 0;
		}
		#section{
			margin: 0 auto;
			width: 800px;
		}
	</style>
</head>
<body>
<h2>東南アジアに関するアンケート</h2>
<div id="section">
<form action="<?$_SERVER["SCRIPT_NAME"]?>" method="POST">
<table>
	<tr>
		<td>年齢</td>
		<td>
			<input type="radio" name="age" value="0" <?if($age=="0"){echo "checked";}?>>20歳以下
			<input type="radio" name="age" value="1" <?if($age=="1"){echo "checked";}?>>20~34歳
			<input type="radio" name="age" value="2"　<?if($age=="2"){echo "checked";}?>>35~49歳
			<input type="radio" name="age" value="3"　<?if($age=="3"){echo "checked";}?>>50~59歳
			<input type="radio" name="age" value="4"　<?if($age=="4"){echo "checked";}?>>60歳以上
		</td>
	</tr>
	<tr>
		<td>性別</td>
		<td>
			<input type="radio" name="sex" value="0" <?if($sex=="0"){echo "checked";}?>>男性
			<input type="radio" name="sex" value="1" <?if($sex=="1"){echo "checked";}?>>女性
		</td>
	</tr>
	<tr>
		<td>海外旅行歴</td>
		<td>
			<select name="travel">
				<option value="0"　<?if($travel=="0"){echo "selected";}?>>なし</option>
				<option value="1"　<?if($travel=="1"){echo "selected";}?>>1~5回</option>
				<option value="2"　<?if($travel=="2"){echo "selected";}?>>5~10回</option>
				<option value="3"　<?if($travel=="3"){echo "selected";}?>>11回以上</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>いくつの東南アジアの国を<br>知っていますか。</td>
		<td>
			<input type="checkbox" name="seasia[]" value="インドネシア">インドネシア
			<input type="checkbox" name="seasia[]" value="シンガポール">シンガポール
			<input type="checkbox" name="seasia[]" value="マレーシア">マレーシア
			<input type="checkbox" name="seasia[]" value="タイ">タイ
			<input type="checkbox" name="seasia[]" value="ラオス">ラオス			<br>
			<input type="checkbox" name="seasia[]" value="ミャンマー">ミャンマー
			<input type="checkbox" name="seasia[]" value="カンボジア">カンボジア
			<input type="checkbox" name="seasia[]" value="ベトナム">ベトナム
			<input type="checkbox" name="seasia[]" value="フィリピン">フィリピン
			<input type="checkbox" name="seasia[]" value="ブルネイ">ブルネイ
			<p>※複数選択が可能です</p>
		</td>
	</tr>
	<tr>
		<td>東南アジアのイメージ</td>
		<td>
			<textarea name="imp" cols="50" rows="5"></textarea>
		</td>
	</tr>
	<tr>
		<td>東南アジアに行ってみたいですか？</td>
		<td>
			<input type="radio" name="wannago" <?if($wannago=="0"){echo "checked";}?>>はい
			<input type="radio" name="wannago" <?if($wannago=="1"){echo "checked";}?>>いいえ
		</td>
	</tr>
	<tr>
		<td>いいえの方、それはなぜですか？</td>
		<td>
		<textarea name="reason" cols="50" rows="5" disabled></textarea>
		</td>
	</tr>
	<tr>
		<td>一番行きたい国はどこですか</td>
		<td>
			<input type="radio" name="bestpls" <?if($bestpls=="0"){echo "checked";}?> value="インドネシア">インドネシア
			<input type="radio" name="bestpls" <?if($bestpls=="1"){echo "checked";}?> value="シンガポール">シンガポール
			<input type="radio" name="bestpls" <?if($bestpls=="2"){echo "checked";}?> value="マレーシア">マレーシア
			<input type="radio" name="bestpls" <?if($bestpls=="3"){echo "checked";}?> value="タイ">タイ
			<input type="radio" name="bestpls" <?if($bestpls=="4"){echo "checked";}?> value="ラオス">ラオス<br>
			<input type="radio" name="bestpls" <?if($bestpls=="5"){echo "checked";}?> value="ミャンマー">ミャンマー
			<input type="radio" name="bestpls" <?if($bestpls=="6"){echo "checked";}?> value="カンボジア">カンボジア
			<input type="radio" name="bestpls" <?if($bestpls=="7"){echo "checked";}?> value="ベトナム">ベトナム
			<input type="radio" name="bestpls" <?if($bestpls=="8"){echo "checked";}?> value="フィリピン">フィリピン
			<input type="radio" name="bestpls" <?if($bestpls=="9"){echo "checked";}?> value="ブルネイ">ブルネイ
		</td>
	</tr>
	<tr>
		<td>twitterアカウント<br>（ない方はニックネーム）</td>
		<td><input type="text" name="hname" value="@" maxlength="2"></td>
	</tr>
	<tr>
		<td>メールアドレス</td> 
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" onsubmit="check();"></td>
	</tr>
</table>
</form>
</div>


ありがとうございました。
</body>
</html>