<?php
class XUploadForm extends CFormModel
{
        public $file;
        public $mime_type;
        public $size;
        public $name;
        public $filename;

        /**
         * @var boolean dictates whether to use sha1 to hash the file names
         * along with time and the user id to make it much harder for malicious users
         * to attempt to delete another user's file
        */
        public $secureFileNames = false;

        /**
         * Declares the validation rules.
         * The rules state that username and password are required,
         * and password needs to be authenticated.
         */
        public function rules()
        {
                return array(
                        array('IMAGE', 'IMAGE'),
                );
        }

        /**
         * Declares attribute labels.
         */
        public function attributeLabels()
        {
                return array(
                        //'file'=>'Upload files',
                        'ID' => 'ID',
			'IMAGE_TYPE' => 'Image Type',
			'IMAGE' => 'Image',
			'SCANED_ON' => 'Scaned On',
			'PED_ID' => 'Ped',
			'PARTY_ID' => 'Party',
                );
        }

        public function getReadableFileSize($retstring = null) {
                // adapted from code at http://aidanlister.com/repos/v/function.size_readable.php
                $sizes = array('bytes', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

                if ($retstring === null) { $retstring = '%01.2f %s'; }

                $lastsizestring = end($sizes);

                foreach ($sizes as $sizestring) {
                        if ($this->size < 1024) { break; }
                        if ($sizestring != $lastsizestring) { $this->size /= 1024; }
                }
                if ($sizestring == $sizes[0]) { $retstring = '%01d %s'; } // Bytes aren't normally fractional
                return sprintf($retstring, $this->size, $sizestring);
        }

        /**
         * A stub to allow overrides of thumbnails returned
         * @since 0.5
         * @author acorncom
         * @return string thumbnail name (if blank, thumbnail won't display)
         */
        public function getThumbnailUrl($publicPath) {
            return $publicPath.$this->filename;
        }

        /**
         * Change our filename to match our own naming convention
        * @return bool
        */
        public function beforeValidate() {

            //(optional) Generate a random name for our file to work on preventing
            // malicious users from determining / deleting other users' files
            if($this->secureFileNames)
            {
                $this->filename = sha1( Yii::app( )->user->id.microtime( ).$this->name);
                $this->filename .= ".".$this->file->getExtensionName( );
            }

            return parent::beforeValidate();
        }
        
        
        public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('IMAGE_TYPE',$this->IMAGE_TYPE,true);
		$criteria->compare('IMAGE',$this->IMAGE,true);
		$criteria->compare('SCANED_ON',$this->SCANED_ON,true);
		$criteria->compare('PED_ID',$this->PED_ID);
		$criteria->compare('PARTY_ID',$this->PARTY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
