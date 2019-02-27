//-------------------GETTER %variable% ------------------------------
/**
 * Get the value of %description%
 *
 * @return %type%
 */
%scope% function %methodName%() : %type% {
return $this->%variable%;
}



//--------------------SETTER %variable% --------------------------
/**
 * Set the value of %description%
 *
 * @param %type% %variable%
 */
%scope% function %methodName%(%type% $%variable%) {
$this->%variable% = $%variable%;
return $this;
}
