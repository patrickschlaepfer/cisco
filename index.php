<?
header("Content-type: text/xml");
header("Connection: close");
header("Expires: -1");
?>
<CiscoIPPhoneMenu>
  <Title>Title of Menu</Title>
  <Prompt>Prompt text.</Prompt>
  <MenuItem>
    <Name>Uhr</Name>
    <URL>http://192.168.1.30/cisco/clock.php</URL>
  </MenuItem>
  <MenuItem>
    <Name>Name of Menu Item.</Name>
    <URL>http://url.of.site.com/services/command.php</URL>
  </MenuItem>
</CiscoIPPhoneMenu>
