<?php
namespace edu\cnm\bsmtih\bootcamp;
/**
* Small example of a Reddit profile and its contents.
 *
 * @author Benjamin Smith <bsmtih@cnm.edu>
 *
 */
class Profile implements \JsonSerializable {
	use ValidateDate;

	private $profileId;
		/** this is the users profile name, also the primary key */
	/** @var int $profileId */
	private $profileDateCreated;
	/** this is for when the user makes a profile, a timestamp will mark the date of the creation of the profile */
	/** @var int */
	private $profileEmail;
	/** this is the email used to make the profile and cannot be used for more than one profile */
	/** @var int(128) */
	private $userDob;
	/**this is optional for the profile and is only asked for to verify use of the "nsfw" subreddits*/
	/** @var  */

/**
 * constructor for this profile
 *
 *@param
 *fuck*/

}