<?php

        function qa_send_notification($userid, $email, $handle, $subject, $body, $subs)
/*
        Send email to person with $userid and/or $email and/or $handle (null/invalid values are ignored or retrieved from
        user database as appropriate). Email uses $subject and $body, after substituting each key in $subs with its
        corresponding value, plus applying some standard substitutions such as ^site_title, ^handle and ^email.
*/
	{
		// Split list of emails by commas or semicolons, followed by optional spaces
		$email_list = preg_split('/[,;] */', $email, -1, PREG_SPLIT_NO_EMPTY);
		$result = True;
		foreach ($email_list as $each_email) {
			// Try to send to each email found
                        // If any fail, return false; but all will be tried (this is why '&& $result' is at the end)
			$result = (qa_send_notification_base($userid, $each_email, $handle, $subject, $body, $subs) && $result);
		}
		return $result;
	}

