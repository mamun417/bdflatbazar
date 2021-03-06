<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div class="title-bg">
      <div class="title-featured">
        <span id="">Hostel Rent Save</span>            
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1">
        <form name="hostel" method="post" action="my_account/hostel_rent_save" enctype="multipart/form-data">
          <table border="0" cellpadding="2" cellspacing="2" style="font-size: 11px;">
            <tr>
              <td>Title</td>
              <td colspan="5"><input type="text"required name="title" value="<?php if (isset($hostel['title'])) { echo $hostel['title'];} ?>" style="width: 390px;" /></td>
            </tr>
            <tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="6" align="left">Address</th>
            </tr>
            <tr>
              <td>House No</td>
              <td><input type="text" name="house" value="<?php if (isset($hostel['house'])) { echo $hostel['house'];} ?>" style="width: 73px;" /></td>
              <td>Road No</td>
              <td><input type="text" name="road" value="<?php if (isset($hostel['road'])) { echo $hostel['road'];} ?>" style="width: 73px;" /></td>
              <td>Sector</td>
              <td><input type="text" name="sector" value="<?php if (isset($hostel['sector'])) { echo $hostel['sector'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>District</td>
              <td>
                <select name="district_id" id="district_id" style="width: 80px;">
                  <option>Select One</option>
                  <?php foreach($districts as $district){ ?>
                  <option value="<?php echo $district['id']; ?>" <?php if (isset($hostel['district_id'])) { if ($district['id'] == $hostel['district_id']) { echo 'selected'; }} ?>><?php echo $district['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
              <td>Area</td>
              <td colspan="3">
                <select name="area_id" id="area_id" style="width: 80px;">
                  <option>Select District First</option>
                  <?php foreach($areas as $area){ ?>
                  <option value="<?php echo $area['id']; ?>" <?php if (isset($hostel['area_id'])) { if ($area['id'] == $hostel['area_id']) { echo 'selected'; }} ?>><?php echo $area['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
              <th colspan="6" align="left">Hostel Specification</th>
            </tr>
            <tr>
              <td>Member per Room</td>
              <td>
                <select name="total_members" style="width: 80px;">
                  <option value="1" <?php if (isset($hostel['total_members'])) { if ($hostel['total_members'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($hostel['total_members'])) { if ($hostel['total_members'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($hostel['total_members'])) { if ($hostel['total_members'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($hostel['total_members'])) { if ($hostel['total_members'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($hostel['total_members'])) { if ($hostel['total_members'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($hostel['total_members'])) { if ($hostel['total_members'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
              <td>Total Bed</td>
              <td>
                <select name="total_bed" style="width: 80px;">
                  <option value="1" <?php if (isset($hostel['total_bed'])) { if ($hostel['total_bed'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($hostel['total_bed'])) { if ($hostel['total_bed'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($hostel['total_bed'])) { if ($hostel['total_bed'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($hostel['total_bed'])) { if ($hostel['total_bed'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($hostel['total_bed'])) { if ($hostel['total_bed'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($hostel['total_bed'])) { if ($hostel['total_bed'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
              <td>Present Member</td>
              <td>
                <select name="current_members" style="width: 80px;">
                  <option value="1" <?php if (isset($hostel['current_members'])) { if ($hostel['current_members'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($hostel['current_members'])) { if ($hostel['current_members'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($hostel['current_members'])) { if ($hostel['current_members'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($hostel['current_members'])) { if ($hostel['current_members'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($hostel['current_members'])) { if ($hostel['current_members'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($hostel['current_members'])) { if ($hostel['current_members'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Required Member</td>
              <td>
                <select name="required_members" style="width: 80px;">
                  <option value="1" <?php if (isset($hostel['required_members'])) { if ($hostel['required_members'] == "1") { echo 'selected'; }} ?>>1</option>
                  <option value="2" <?php if (isset($hostel['required_members'])) { if ($hostel['required_members'] == "2") { echo 'selected'; }} ?>>2</option>
                  <option value="3" <?php if (isset($hostel['required_members'])) { if ($hostel['required_members'] == "3") { echo 'selected'; }} ?>>3</option>
                  <option value="4" <?php if (isset($hostel['required_members'])) { if ($hostel['required_members'] == "4") { echo 'selected'; }} ?>>4</option>
                  <option value="5" <?php if (isset($hostel['required_members'])) { if ($hostel['required_members'] == "5") { echo 'selected'; }} ?>>5</option>
                  <option value="6" <?php if (isset($hostel['required_members'])) { if ($hostel['required_members'] == "6") { echo 'selected'; }} ?>>6</option>
                </select>
              </td>
              <td>Food</td>
              <td>
                <select name="food" style="width: 80px;">
                  <option value="Shared" <?php if (isset($hostel['food'])) { if ($hostel['food'] == "Shared") { echo 'selected'; }} ?>>Shared</option>
                  <option value="Individual" <?php if (isset($hostel['food'])) { if ($hostel['food'] == "Individual") { echo 'selected'; }} ?>>Individual</option>
                </select>
              </td>
              <td>Kitchen</td>
              <td>
                <select name="kitchen" style="width: 80px;">
                  <option value="Shared" <?php if (isset($hostel['kitchen'])) { if ($hostel['kitchen'] == "Shared") { echo 'selected'; }} ?>>Shared</option>
                  <option value="Single" <?php if (isset($hostel['kitchen'])) { if ($hostel['kitchen'] == "Single") { echo 'selected'; }} ?>>Single</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Attached Bath</td>
              <td>
                <select name="attached_bath" style="width: 80px;">
                  <option value="Yes" <?php if (isset($hostel['attached_bath'])) { if ($hostel['attached_bath'] == "Yes") { echo 'selected'; }} ?>>Yes</option>
                  <option value="No" <?php if (isset($hostel['attached_bath'])) { if ($hostel['attached_bath'] == "No") { echo 'selected'; }} ?>>No</option>
                </select>
              </td>
              <td>Member Occupation</td>
              <td colspan="3">
                <select name="member_occupation" style="width: 80px;">
                  <option value="Student" <?php if (isset($hostel['member_occupation'])) { if ($hostel['member_occupation'] == "Student") { echo 'selected'; }} ?>>Student</option>
                  <option value="Service Holder" <?php if (isset($hostel['member_occupation'])) { if ($hostel['member_occupation'] == "Service Holder") { echo 'selected'; }} ?>>Service Holder</option>
                  <option value="Business Man" <?php if (isset($hostel['member_occupation'])) { if ($hostel['member_occupation'] == "Business Man") { echo 'selected'; }} ?>>Business Man</option>
                </select>
              </td>
            </tr>
            <tr>
              <td valign="top">Details</td>
              <td colspan="5"><textarea name="details" style="width: 318px;"><?php if (isset($hostel['details'])) { echo $hostel['details'];} ?></textarea></td>
            </tr>
            <tr>
              <th colspan="6">&nbsp;</th>
            </tr>
            <tr>
                          <td><font color="#FF0000"><b>Owner Number:</b></font></td>
              <td><input type="text" required name="owner_number" value="<?php if (isset($apt['owner_number'])) { echo $apt['owner_number'];} ?>" style="width: 100px;" /></td>
              <td><th>Owner Name :</th></td>
              <td><input type="text" name="owner_name" value="<?php if (isset($apt['owner_name'])) { echo $apt['owner_name'];} ?>" style="width: 100px;" /></td>
            </tr>
            <tr>
              <th colspan="6" align="left">Financial Details</th>
            </tr>
            <tr>
              <td>Rent Price</td>
              <td><input type="text" name="rent" value="<?php if (isset($hostel['rent'])) { echo $hostel['rent'];} ?>" style="width: 73px;" /></td>
              <td>Advance</td>
              <td colspan="3"><input type="text" name="advance" value="<?php if (isset($hostel['advance'])) { echo $hostel['advance'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <td>Security</td>
              <td><input type="text" name="security_charge" value="<?php if (isset($hostel['security_charge'])) { echo $hostel['security_charge'];} ?>" style="width: 73px;" /></td>
              <td>Service Charge</td>
              <td colspan="3"><input type="text" name="service_charge" value="<?php if (isset($hostel['service_charge'])) { echo $hostel['service_charge'];} ?>" style="width: 73px;" /></td>
            </tr>
            <tr>
              <th colspan="6" align="left">Pictures</th>
            </tr>
            <tr>
              <td>Perspective View</td>
              <td colspan="5"><input type="file" name="perspective_view" /></td>
            </tr>
            <tr>
              <td>Floor Plan</td>
              <td colspan="5"><input type="file" name="floor_plan" /></td>
            </tr>
            <tr>
              <td>Status</td>
              <td>
                <select name="status" style="width: 80px;">
                  <option value="Active" <?php if (isset($hostel['status'])) { if ($hostel['status'] == "Active") { echo 'selected'; }} ?>>Active</option>
                  <option value="Inactive" <?php if (isset($hostel['status'])) { if ($hostel['status'] == "Inactive") { echo 'selected'; }} ?>>Inactive</option>
                </select>
              </td>
              <td>Post Validity</td>
              <td colspan="3">
                <select name="validity" style="width: 80px;">
                  <option value="1-2 Months" <?php if (isset($hostel['validity'])) { if ($hostel['validity'] == "1-2 Months") { echo 'selected'; }} ?>>1-2 Months</option>
                  <option value="3-4 Months" <?php if (isset($hostel['validity'])) { if ($hostel['validity'] == "3-4 Months") { echo 'selected'; }} ?>>3-4 Months</option>
                  <option value="4-6 Months" <?php if (isset($hostel['validity'])) { if ($hostel['validity'] == "4-6 Months") { echo 'selected'; }} ?>>4-6 Months</option>
                  <option value="1 Year" <?php if (isset($hostel['validity'])) { if ($hostel['validity'] == "1 Year") { echo 'selected'; }} ?>>1 Year</option>
                </select>
              </td>
            </tr>
            <input type="hidden" name="id" value="<?php if (isset($hostel['id'])) { echo $hostel['id']; } ?>" />
            <tr>
              <th colspan="6" align="center"><input type="submit" name="submit" value="Submit" /></th>
            </tr>
          </table>
        </form>
      </div>

      <div class="clear"></div>
    </div>
  </div>

</div>