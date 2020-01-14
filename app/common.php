<?php
// 应用公共文件
namespace app;

class common
{
    protected $method = 'DES-ECB';          //  加密方法（DES-ECB、DES-CBC、DES-CTR、DES-OFB、DES-CFB）
    protected $passwd = '1234567890';       //  加密的密钥
    protected $options = 0;                 //  数据格式选项（0、OPENSSL_RAW_DATA=1、OPENSSL_ZERO_PADDING=2、OPENSSL_NO_PADDING=3）
    protected $iv = '';                     //  密码初始向量（可选）

    // 密码加密
    protected function encry ($pwd) {
        $data = openssl_encrypt($pwd, $this->method, $this->passwd,$this->options, $this->iv);
        return $data;
    }

    // 密码解密
    protected function decry($pwd) {
        $data = openssl_decrypt($pwd, $this->method, $this->passwd,$this->options, $this->iv);
        return $data;
    }
}