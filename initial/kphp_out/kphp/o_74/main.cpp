//crc64:aa66f1f01942c2bb
//crc64_with_comments:52974a2bc04ac3c0
#include "runtime-headers.h"
#include "o_74/main.h"
extern mixed v$_GET;

extern string v$const_string$us17440fdc24cfd854;

extern string v$const_string$us4c516c8e57be73bf;

//source = [solution.php]
//55: function main() {
void f$main() noexcept  {
  mixed v$raw_accounts;
//56:     $raw_accounts = $_GET['accounts'];
  v$raw_accounts = v$_GET.get_value (v$const_string$us17440fdc24cfd854, 1926875143400074046_i64);
//57:     if (!$raw_accounts) {
  if (!f$boolval (v$raw_accounts)) {
//58:         die('$_GET["accounts"] is empty');
    f$die(v$const_string$us4c516c8e57be73bf);
  };
  return ;
}


