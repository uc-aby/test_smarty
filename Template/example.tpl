<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{#title#}</title>
</head>
<body>
<select name="dropdown">
    {foreach $options as $option}
        <option value="{$option.value}">{$option.label}</option>
    {/foreach}
</select>
<br>
 {** {escape}
   {$text}
{/escape}  **}
<br>

<table>
    {foreach $table as $row}
        <tr>
            <td>{$row}</td>
            <td>{$row*5}</td>
        </tr>
    {/foreach}
</table>
<br>

{$greeting|cat:" World!"}
<br>

{assign var="string1" value="uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels."}
{assign var="string2" value="At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning."}

{$string1|lower|replace:'ucertify':'uCertify'|wordwrap:30}
<br>
{$string2|lower|replace:'ucertify':'uCertify'|wordwrap:30}
<br>
{$string1|lower|replace:'ucertify':'uCertify'|wordwrap:30|cat:$string2|lower|replace:'ucertify':'uCertify'|wordwrap:30}
<br>

{**  counter**}
{counter name=sequence start=5 skip=2}

{counter name=sequence}

{counter name=sequence}

{counter name=sequence}
<br>
{* cycle *}

<ul>
    {foreach $data as $item}
        <li>{$item.fax}</li>
    {/foreach}
</ul>
<br>


<ul>
{foreach $our_culture as $list}
         <li>{$list}</li>
{/foreach}
</ul>
<br>

<table>
    {foreach range(1, 10) as $i}
        <tr>
            <td>{$i}</td>
            <td>{$i * $number}</td>
        </tr>
    {/foreach}
</table>
{if $number % 2 == 0}
    The number is even.
{else}
    The number is odd.
{/if}


<form>
    <h3>Checkboxes:</h3>
    {html_checkboxes name="colors" values=$checkbox_values selected=$selected_colors}
    
    <h3>Radios:</h3>
    {html_radios name="gender" values=$radio_values selected=$selected_gender}
</form>
<br>




</body>
</html>