<?php
  interface IPhoneService {
    public function listAll($pageable, $ownerId);
    public function find($id);
    public function create($data);
    public function update($data);
    public function patch($data);
    public function delete($id);
  }
?>