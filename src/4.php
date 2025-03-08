<?php
// School Projects Collection
class SchoolProjects {
	public function getProject() {
		return "PHP";
	}
	public function getTitle() {
		return "PHP School Projects";
	}
	public function getDescription() {
		return "A collection of school projects written in PHP.";
	}
	public function getLanguage() {
		return "PHP";
	}
	public function getCategory() {
		return "School Projects";
	}
	public function getTags() {
		return array("School", "Projects", "PHP");
	}
	public function getLink() {
		return "https://github.com/username/school-projects";
	}
	public function getThumbnail() {
		return "https://example.com/thumbs/php_project.png";
	}
}
?>