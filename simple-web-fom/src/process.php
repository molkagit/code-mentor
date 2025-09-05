<?php
class process{
    private $date=[];
    public function processInfo(array $info ):void {
        $this->data['username']=$this->sanitize($info['username']?? '');
        $this->data['email']=$this->verifEMAIL($info['email'] ?? '');
        $this->data['issue']=$this->sanitize($info['issue'] ?? '');
        $this->data['comment']=$this->sanitize($info['comment'] ?? '');
        //verify empty data 
        if (empty($this->data['username'])) {
        throw new Exception('Name is required');
    }
    if (empty($this->data['email'])) {
        throw new Exception('email is required');
    }
    if (empty($this->data['issue'])) {
        throw new Exception('issue is required');
    }
    if (empty($this->data['comment'])) {
        throw new Exception('comment is required');
    }
        
    }
    private function sanitize(string $s):string{
        return htmlspecialchars(strip_tags(trim($s)));
    }
    private function verifEMAIL(string $e):string {
        $email=$this->sanitize($e);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('invalid email !');
        }
        return $email;
    
}
}
?>