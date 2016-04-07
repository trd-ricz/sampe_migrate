<?php

class Pagination {

	public $current_page;
	public $per_page;
	public $total_count;

	public function __construct($page, $per_page, $total_count)
	{
		$this->current_page = (int)$page;
		$this->per_page = (int)$per_page;
		$this->total_count = (int)$total_count;
	}

	public function offset()
	{
		// assuming 20 items per page
		// page 1 has an offset of 0 (1-1) * 20
		// page 2 has an offset of 20 (2-1) * 20
		// in other words, page 2 starts with item 21
		// bec. in page 1 we skip the first 20 records
		return ($this->current_page - 1) * $this->per_page;
	}

	public function total_pages()
	{
		// i have 4 pictures total count
		// per page is 3
		// so 4/3 = 1.33 it is greater than 1 so  it return true cause it will round to the nearest digit using the ceil
		// and it becomes 2
		return ceil($this->total_count/$this->per_page);
	}

	public function previous_page()
	{
		// result will be photo.gallery.com/?page=1
		// assume we are in page=2
		//       2 - 1
		return $this->current_page - 1;
	}

	public function next_page()
	{
		// result will be photo.gallery.com/?page=2
		// assume we are in page=1
		//        1 + 1
		return $this->current_page + 1;
	}

	public function has_previous_page()
	{
		// currently we are in photo.gallery.com/?page=2
		// if the a href link in nav bar li has still value of 1 ex. ?page=1  then its still return true
		return $this->previous_page() >= 1 ? true : false;
	}

	public function has_next_page()
	{
		// lets assume that we have 4 pictures and 3 pics per page so total page is 2
		// example we are in page 1
		// is 1 <= 2 ?  return true
		// is 2 <= 2 ?  return true
		// is 3 <= 2 ?  return false so hide the next nav button
		return $this->next_page() <= $this->total_pages() ? true : false;
	}

}