@if (session()->get('user_id')<>'')
    <?php $fio = session()->get('inform_id')?:'';?>
    <center><form method="POST" @IF (isset($user['inform_id'])) action="{{ route('usersCreate')}}" @ENDIF>
            {{--<form method="POST" @IF (isset($user['inform_id'])) action="{{ route('usersCreate')}}" @ELSE  action="{{ route('updateOneUsersInf')}}" @ENDIF >--}}
            {{ csrf_field() }}
            <table border ="0">
              <tr><td width="400"></td><td width="15">   Логин: </td><td width="600"><input size="25" type="text" name="login" @IF (isset($user['login'])) value = {{$user['login']}}@endif>
                    </br>
                  </br>
                  </td>
              </tr>

              <tr><td></td><td>Пароль: </td><td><input size="25"  type="password" name="password" @IF (isset($user['password'])) value = {{$user['password']}}@endif>
            </br>
            </br>
                  </td>
              </tr>

               <tr><td></td><td> Доступ: </td><td><select  name="role">
                <option value="1" @IF (isset($user['role_id'])) @if ($user['role_id'] == 1)  selected @endif @endif >Администратор</option>
                <option value="2" @IF (isset($user['role_id'])) @if ($user['role_id'] == 2)  selected @endif @endif >Руководитель</option>
                <option value="3" @IF (isset($user['role_id'])) @if ($user['role_id'] == 3)  selected @endif @endif >Менеджер</option>
                <option value="4" @IF (isset($user['role_id'])) @if ($user['role_id'] == 4)  selected @endif @endif >Работник</option>
            </select>
            </br>
            </br>
                   </td>
               </tr>
            <tr><td></td><td>ФИО:</td><td><input size="25" type="text" name="FIO" size="25" @IF (isset($oneUserInfCheck['FIO'])) value = "{{$oneUserInfCheck['FIO']}}"@endif >
            </br>
            {{--ФИО: <textarea  type="text" name="FIO" >@IF (isset($oneUserInfCheck['FIO'])) {{$oneUserInfCheck['FIO']}}@endif </textarea>--}}
             </br>
             </br>
                </td>
            </tr>
                <tr><td></td><td>Страна :</td><td><input size="25" type="text" name="country" @IF (isset($oneUserInfCheck['country'])) value = {{$oneUserInfCheck['country']}}@endif>
            </br>
            </br>
               </td>
           </tr>

           <tr><td></td><td>Город:         </td><td><input size="25" type="text" name="city" @IF (isset($oneUserInfCheck['city'])) value = {{$oneUserInfCheck['city']}}@endif>
            </br>
            </br>
               </td>
           </tr>

            <tr><td></td><td>День рождения: </td><td><input type="date" name="birthDate" @IF (isset($oneUserInfCheck['birth_date'])) value = {{$oneUserInfCheck['birth_date']}}@endif>
            </br>
            </br>
                </td>
            </tr>
            </table>

            <input type="submit" @IF (!isset($oneUserInfCheck['inform_id'])) value="СОЗДАТЬ"@ENDIF  value="ИЗМЕНИТЬ ">
        </form></center>

@endif