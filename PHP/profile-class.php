<?php
namespace edu\cnm\bsmtih\bootcamp;

require_once("validate-date.php");
/**
* Small example of a Reddit profile and its contents.
 *
 * @author Benjamin Smith <bsmtih@cnm.edu>
 *
 */
class Profile implements \JsonSerializable {
	use \ValidateDate;

	private $profileId;
		/** this is the users profile id also the primary key */
	/** @var int $profileId */
	private $profileDateCreated;
	/** this is for when the user makes a profile, a timestamp will mark the date of the creation of the profile */
	/** @var int */
	private $profileEmail;
	/** this is the email used to make the profile and cannot be used for more than one profile */
	/** @var string
	 **/
	private $userDob;
	/**this is optional for the profile and is only asked for to verify use of the "nsfw" subreddits*/
	/** @var int $userDob */

/**
 * constructor for this profile
 *
 *@param \DateTime|string|null $newProfileDate set to current date and time.
 * @param int $profileId ID of this profile
 * @param int $profileEmail email of the users profile
 * @param int|null $userDob users date of birth input or null if not given
 * @throws \InvalidArgumentException if data types are not valid
 * @throws \RangeException if data types are out of bounds (e.g. strings are too long, negative value.)
 * @throws \TypeError if data types violate type hits
 * @throws \Exception if some other exception occurs
 **/
public function __construct(int $newProfileId = null, string $newProfileEmail, int $newProfileDob, $newProfileDateCreated) {
	try {
			$this->setProfileId($newProfileId);
			$this->setProfileEmail($newProfileEmail);
			$this->setProfileDateCreated($newProfileDateCreated);
			$this->setProfileDob($newProfileDob);
	} catch(\InvalidArgumentException $invalidArgument) {
		// rethrow the exception to the caller
		throw(new \InvalidArgumentException($invalidArgument->getmessage(), 0, $invalidArgument));
	} catch(\RangeException $range){
		// rethrow the exception to the caller
		throw(new \RangeException($range->getMessage(), 0, $range));
	} catch(\TypeError $typeError) {
		//rethrow the exception to the caller
		throw(new \TypeError($typeError->getMessage(), 0, $typeError));
	} catch(\Exception $exception) {
		//rethrow the exception to the caller
		throw(new \Exception($exception->getMessage(), 0, $exception));
	}
}
/**
 * accessor method for profile id
 *
 * @return int|null value of profile id
 *
 */
	/**
	 * @return mixed
	 */
	public function getProfileId() {
		return ($this->profileId);
	}
	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 */
	public function setProfileId(int $newProfileId) {
		//verify the profile id is positive
		if($newProfileId <= 0) {
			throw(new \RangeException("profile id is not positive"));
		}
		//convert and store the profile id
		$this->profileId = $newProfileId;
	}
	/**
	 * accessor method for profile email
	 *
	 * @return string value of tweet content
	 */
	public function getprofileEmail() {
		return($this->profileEmail);
	}

	/**
	 * mutator method for profile email*/
}