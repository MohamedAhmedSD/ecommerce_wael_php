// [1] create db of noteapp

// make users table in db => id, username, email, password
// it one to many db
// notes table => notes_id, notes_title, notes_content, notes_image, notes_users{int} == same to user id who add it
// image => varchar , notes == text => it take more data
// we make connection between 2 table => cascade notes table with users
// from structure => relation view => we can use cascade


// [2] api 
// we add folder => auth, with 2 files => [ login == select && signup == insert == add process ]