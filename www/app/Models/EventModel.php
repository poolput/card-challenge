<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model {
	public function __construct() {
		$this->db = \Config\Database::connect ();
		$this->session = \Config\Services::session ();
	}
	public function getEvents($id = array ()) {
		if (! empty ( $id )) {
			$sql = "SELECT * FROM event where event_id = '" . $id . "' ";
		} else {
			$company_id = $this->session->get ( 'company_id' );
			$sql = "SELECT * FROM event where company_id = '" . $company_id . "' ";
		}
		$query = $this->db->query ( $sql );
		$data = array ();
		foreach ( $query->getResult () as $key => $row ) {
			$data [$key] ['id'] = $row->event_id;
			$data [$key] ['name'] = $row->event_name;
		}
		return $data;
	}
	public function getEventPeriod($id = array ()) {
		$sql = "SELECT * FROM event left join event_period on event.event_id = event_period.event_id where event.event_id = '" . $id . "' ";
		$query = $this->db->query ( $sql );
		$data = array ();
		foreach ( $query->getResult () as $key => $row ) {
			$data [$key] ['id'] = $row->id;
			$data [$key] ['event_id'] = $row->event_id;
			$data [$key] ['branch_id'] = $row->branch_id;
			$data [$key] ['date_start'] = $row->date_start;
			$data [$key] ['date_end'] = $row->date_end;
		}
		return $data;
	}
}
?>