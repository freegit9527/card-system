<?php
class AlipayMobilePublicAccountAddRequest { private $agreementId; private $bindAccountNo; private $bizContent; private $displayName; private $fromUserId; private $realName; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setAgreementId($sp81d0a5) { $this->agreementId = $sp81d0a5; $this->apiParas['agreement_id'] = $sp81d0a5; } public function getAgreementId() { return $this->agreementId; } public function setBindAccountNo($spf7251c) { $this->bindAccountNo = $spf7251c; $this->apiParas['bind_account_no'] = $spf7251c; } public function getBindAccountNo() { return $this->bindAccountNo; } public function setBizContent($sp5896e5) { $this->bizContent = $sp5896e5; $this->apiParas['biz_content'] = $sp5896e5; } public function getBizContent() { return $this->bizContent; } public function setDisplayName($sp106045) { $this->displayName = $sp106045; $this->apiParas['display_name'] = $sp106045; } public function getDisplayName() { return $this->displayName; } public function setFromUserId($spaa94ea) { $this->fromUserId = $spaa94ea; $this->apiParas['from_user_id'] = $spaa94ea; } public function getFromUserId() { return $this->fromUserId; } public function setRealName($sp202e88) { $this->realName = $sp202e88; $this->apiParas['real_name'] = $sp202e88; } public function getRealName() { return $this->realName; } public function getApiMethodName() { return 'alipay.mobile.public.account.add'; } public function setNotifyUrl($spa00d19) { $this->notifyUrl = $spa00d19; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp8a30df) { $this->returnUrl = $sp8a30df; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($spb9b0b4) { $this->terminalType = $spb9b0b4; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spf3f780) { $this->terminalInfo = $spf3f780; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5992f8) { $this->prodCode = $sp5992f8; } public function setApiVersion($spc906d7) { $this->apiVersion = $spc906d7; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp48c449) { $this->needEncrypt = $sp48c449; } public function getNeedEncrypt() { return $this->needEncrypt; } }