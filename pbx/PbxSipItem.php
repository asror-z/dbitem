<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\pbx;


class PbxSipItem
{
    /**
     * @var required {extention number}
     */
    public $id;
    public $secret = 'secret';
    /**
     * @var string {password} of extention
     */
    public $secretData = '';
    public $secretFlags = 2;
    public $dtmfmode = 'dtmfmode';
    public $dtmfmodeData = 'rfc2833';
    public $dtmfmodeFlags =  3;
    public $canreinvite = 'canreinvite';
    public $canreinviteData = 'no';
    public $canreinviteFlags = 4;
    public $context = 'context';
    public $contextData = 'from-internal';
    public $contextFlags = 5;
    public $host = 'host';
    public $hostData = 'dynamic';
    public $hostFlags = 6;
    public $trustrpid = 'trustrpid';
    public $trustrpidData = 'yes';
    public $trustrpidFlags = 7;
    public $sendrpid = 'sendrpid';
    public $sendrpidData = 'yes';
    public $sendrpidFlags = 8;
    public $type = 'type';
    public $typeData = 'friend';
    public $typeFlags = 9;
    public $nat = 'nat';
    public $natData = 'yes';
    public $natFlags = 10;
    public $port = 'port';
    public $portData = '5060';
    public $portFlags = 11;
    public $qualify = 'qualify';
    public $qualifyData = 'yes';
    public $qualifyFlags = 12;
    public $qualifyfreq = 'qualifyfreq';
    public $qualifyfreqData = '60';
    public $qualifyfreqFlags = 13;
    public $udp = 'udp';
    public $udpData = 'transport';
    public $udpFlags = 14;
    public $avpf = 'avpf';
    public $avpfData = 'no';
    public $avpfFlags = 15;
    public $icesupport = 'icesupport';
    public $icesupportData = 'no';
    public $icesupportFlags = 16;
    public $encryption = 'encryption';
    public $encryptionData = 'no';
    public $encryptionFlags = 17;
    public $callgroup = 'callgroup';
    public $callgroupData = '';
    public $callgroupFlags = 18;
    public $pickupgroup = 'pickupgroup';
    public $pickupgroupData = '';
    public $pickupgroupFlags = 19;
    public $disallow = 'disallow';
    public $disallowData = '';
    public $disallowFlags = 20;
    public $allow = 'allow';
    public $allowData = '';
    public $allowFlags = 21;
    public $dial = 'dial';
    public $dialData = '';
    public $dialFlags = 22;
    public $mailbox = 'mailbox';
    public $mailboxData = '';
    public $mailboxFlags = 23;
    public $deny = 'deny';
    public $denyData = '0.0.0.0/0.0.0.0';
    public $denyFlags = 24;
    public $permit = 'permit';
    public $permitData = '0.0.0.0/0.0.0.0';
    public $permitFlags = 25;
    public $account = 'account';
    public $accountData = 'account';
    public $accountFlags = 26;
    public $callerid = 'callerid';
    public $calleridData = '';
    public $calleridFlags = 27;
    public $max_audio_streams = 'max_audio_streams';
    public $max_audio_streamsData = '1';
    public $max_audio_streamsFlags = 29;
    public $max_video_streams = 'max_video_streams';
    public $max_video_streamsData = '1';
    public $max_video_streamsFlags = 30;
    public $media_encryption = 'media_encryption';
    public $media_encryptionData = 'no';
    public $media_encryptionFlags = 31;
    public $timers = 'timers';
    public $timersData = 'yes';
    public $timersFlags = 32;
    public $timers_min_se = 'timers_min_se';
    public $timers_min_seData = '90';
    public $timers_min_seFlags = 33;
    public $direct_media = 'direct_media';
    public $direct_mediaData = 'yes';
    public $direct_mediaFlags = 34;
    public $media_encryption_optimistic = 'media_encryption_optimistic';
    public $media_encryption_optimisticData = 'no';
    public $media_encryption_optimisticFlags = 35;
    public $refer_blind_progress = 'refer_blind_progress';
    public $refer_blind_progressData = 'yes';
    public $refer_blind_progressFlags = 36;
    public $device_state_busy_at = 'device_state_busy_at';
    public $device_state_busy_atData = '0';
    public $device_state_busy_atFlags = 37;
    public $match = 'match';
    public $matchData = '';
    public $matchFlags = 38;
    public $maximum_expiration = 'maximum_expiration';
    public $maximum_expirationData = '7200';
    public $maximum_expirationFlags = 39;
    public $minimum_expiration = 'minimum_expiration';
    public $minimum_expirationData = '60';
    public $minimum_expirationFlags = 40;
    public $rtp_timeout = 'rtp_timeout';
    public $rtp_timeoutData = '0';
    public $rtp_timeoutFlags = 41;
    public $rtp_timeout_hold = 'rtp_timeout_hold';
    public $rtp_timeout_holdData = '0';
    public $rtp_timeout_holdFlags = 42;
    public $outbound_proxy = 'outbound_proxy';
    public $outbound_proxyData = '';
    public $outbound_proxyFlags = 43;
    public $message_context = 'message_context';
    public $message_contextData = '';
    public $message_contextFlags = 44;
    public $secret_origional = 'secret_origional';
    public $secret_origionalData = '';
    public $secret_origionalFlags = 45;
    public $sipdriver = 'sipdriver';
    public $sipdriverData = 'chan_pjsip';
    public $sipdriverFlags = 46;
}
