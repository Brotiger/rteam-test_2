<?

class UserCommand extends CConsoleCommand
{
    public function actionIndex()
    {
        foreach(User::find()->each(100) as $user){
            $user->password = md5(Security::generateRandomString(12));
            $user->save();
        }

        return 0;
    }
}
?>