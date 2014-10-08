<?php


class NotificationComponent extends Component
{	
	/**
	 * Generate a Notification
	 * @param  String $text
	 * @param  String $layout
	 * @param  String $type
	 * @param  int $timeOut
	 * @return script
	 */
	public function send($text,$layout,$type,$timeOut){
		return "<script> noty({text: '<strong>".$text
			."</strong>',layout:'".$layout
			."',type:'".$type
			."',timeout:"
			.$timeOut
			."});</script>";
	}
}