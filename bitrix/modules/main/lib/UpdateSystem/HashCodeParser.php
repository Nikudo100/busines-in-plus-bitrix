<? namespace Bitrix\Main\UpdateSystem;$GLOBALS['____648031588']= array(base64_decode('Y'.'mFzZTY0'.'X'.'2RlY29kZQ=='),base64_decode('dW5zZXJp'.'YWx'.'pemU'.'='),base64_decode('b3BlbnNzbF'.'92ZXJ'.'p'.'Znk'.'='),base64_decode('dW5zZXJpYWxpe'.'mU='));if(!function_exists(__NAMESPACE__.'\\___1469358379')){function ___1469358379($_1291678462){static $_542891163= false; if($_542891163 == false) $_542891163=array('YWxs'.'b3dlZF9jbGFzc2'.'Vz','aW'.'5m'.'b'.'w==',''.'c2'.'lnbm'.'F0d'.'XJl','c2hhMjU2V2l0aFJTQU'.'V'.'u'.'Y3J5c'.'HRpb'.'24=',''.'aW5mbw==','YWxsb'.'3dlZF9jbGFzc2Vz','R'.'XJyb3IgdmVyaWZ5'.'IG'.'9wZW5zc2'.'w'.'gW0hD'.'U'.'FAwMV0=','LS0tLS'.'1C'.'RU'.'dJT'.'iBQVUJMSUMgS0V'.'ZLS0'.'tL'.'S0KTU'.'lJ'.'Qklq'.'QU5'.'CZ2txaGt'.'pRzl'.'3MEJBU'.'U'.'VGQUFPQ0FRO'.'EF'.'N'.'SU'.'l'.'CQ'.'2dLQ0FR'.'RUE'.'2'.'aG'.'N4S'.'XFp'.'a'.'XRVWlJ'.'Nd1lpdWtTVQpoOXh'.'h'.'NWZFRFl'.'sY2NiVz'.'N'.'2ajhB'.'dmEz'.'N'.'XZLcVZONGlC'.'OXRxQ1'.'g3alU4NnFBY'.'TJ2MzdtYl'.'R'.'GNnBjWT'.'ZIR1B'.'Ba'.'F'.'JGCm'.'J'.'wbnd'.'YT1k3'.'W'.'Ud4QjFuU0tadkUrakFSYmlMTEJnWjF'.'jRzZaM'.'GR1dTVp'.'MVhocElSTDFjTj'.'BIaDVmZXpwalhD'.'Nk8KWXhZ'.'cTB'.'uVG9'.'IVGp'.'5U'.'mIxeWN6d3RtaV'.'J3'.'WXF1Z'.'F'.'h'.'n'.'L3hX'.'eHBwcXdGMHRVb'.'GQzUUJyM2k2OEI4anF'.'Nb'.'St'.'Ua'.'mRlQQp1L2Z'.'nMUo'.'wSkd0UjQveks0RzdZ'.'S'.'k52'.'a'.'G'.'11aHJSR2'.'t'.'5Q'.'VFWMFRWdT'.'VMRXVnU3h'.'q'.'Q'.'X'.'BS'.'bUlKUU5I'.'UU1'.'LMEVoOTN'.'3Ck'.'1ab0ZvUHA'.'5U2dK'.'N'.'0dhRl'.'U'.'4a3'.'pTK0VRY'.'250WX'.'hiMU5IVUpV'.'SXZUZGl1UlVlRktse'.'VRkeE'.'lySDZDT'.'C'.'8vYXBN'.'SDMKRndJREFRQUIKLS0tL'.'S1FTkQgUFVCTElDI'.'Et'.'FWS'.'0tLS0t');return base64_decode($_542891163[$_1291678462]);}}; use Bitrix\Main\Application; use Bitrix\Main\Security\Cipher; use Bitrix\Main\Security\SecurityException; class HashCodeParser{ private string $_873741846; public function __construct(string $_873741846){ $this->_873741846= $_873741846;}  public function parse(){ $_1199330975= $GLOBALS['____648031588'][0]($this->_873741846); $_1199330975= $GLOBALS['____648031588'][1]($_1199330975,[___1469358379(0) => false]); if($GLOBALS['____648031588'][2]($_1199330975[___1469358379(1)], $_1199330975[___1469358379(2)], $this->__1856238227(), ___1469358379(3)) == round(0+0.25+0.25+0.25+0.25)){ $_1301768477= Application::getInstance()->getLicense()->getHashLicenseKey(); $_692329512= new Cipher(); $_4775968= $_692329512->decrypt($_1199330975[___1469358379(4)], $_1301768477); return $GLOBALS['____648031588'][3]($_4775968,[___1469358379(5) => false]);} throw new SecurityException(___1469358379(6));} private function __1856238227(): string{ return ___1469358379(7);}}?>