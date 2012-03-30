<?php

class isZen {


    /**
     * @assert ('文字列です。') === true
     * @assert ('abcd1234+:;!') === false
     * @assert ('全角abcd') === false
     * @assert ('半角ｶﾅ') === false
     */
    function is_zen_strlen ($text) {
        $len = strlen($text);
        // UTF-8の場合は全角を3文字カウントするので「* 3」にする
        $mblen = mb_strlen($text, "UTF-8") * 3;
        // UTF-8でない時は↓のようにするらしい
        // $mblen = mb_strlen($text, [文字コード]) * 2;

        if($len != $mblen) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @assert ('文字列です。') === true
     * @assert ('abcd1234+:;!') === false
     * @assert ('全角abcd') === false
     * @assert ('半角ｶﾅ') === false
     */
    function is_zen_preg_match ($str) {

        if (!preg_match("/(?:\xEF\xBD[\xA1-\xBF]|\xEF\xBE[\x80-\x9F])|[\x20-\x7E]/", $str)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @assert ('文字列です。') === true
     * @assert ('abcd1234+:;!') === false
     * @assert ('全角abcd') === false
     * @assert ('半角ｶﾅ') === false
     */
    function is_zen_mb_substr ($str) {
        for ($i = 0; $i < mb_strlen($str); $i++) {
            $char = mb_substr($str, $i);
            if (strlen($char) === mb_strlen($char)) {
                return false;
            }
        }
        return true;
    }


    /**
     * @assert ('文字列です。') === true
     * @assert ('abcd1234+:;!') === false
     * @assert ('全角abcd') === false
     * @assert ('半角ｶﾅ') === false
     */
    function is_zen_mb_substr_encoding ($str, $encoding = null) {
        if (is_null($encoding)) {
            $encoding = mb_internal_encoding();
        }
        $len = mb_strlen($str, $encoding);
        for ($i = 0; $i < $len; $i++) {
            $char = mb_substr($str, $i, 1, $encoding);
            if ($this->is_hankaku($char, true, true, $encoding)) {
                return false;
            }
        }
        return true;
    }

    function is_hankaku($str, $include_kana = false, $include_controls = false, $encoding = null) {
        if (!$include_controls && !ctype_print($str)) {
            return false;
        }

        if (is_null($encoding)) {
            $encoding = mb_internal_encoding();
        }
        if ($include_kana) {
            $to_encoding = 'SJIS';
        } else {
            $to_encoding = 'UTF-8';
        }
        $str = mb_convert_encoding($str, $to_encoding, $encoding);

        if (strlen($str) === mb_strlen($str, $to_encoding)) {
            return true;
        } else {
            return false;
        }

    }

}
