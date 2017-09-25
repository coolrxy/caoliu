
// Provide a default path to dwr.engine
if (dwr == null) var dwr = {};
if (dwr.engine == null) dwr.engine = {};
if (DWREngine == null) var DWREngine = dwr.engine;

if (identityService == null) var identityService = {};
identityService._path = '/gb/dwr';
identityService.equals = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'equals', p0, callback);
}
identityService.toString = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'toString', callback);
}
identityService.hashCode = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'hashCode', callback);
}
identityService.indexOf = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'indexOf', p0, callback);
}
identityService.indexOf = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'indexOf', p0, callback);
}
identityService.isFrozen = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'isFrozen', callback);
}
identityService.getUserInfo = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getUserInfo', p0, false, callback);
}
identityService.saveUserBackGround = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserBackGround', p0, false, callback);
}
identityService.saveLastLotteryDateByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLastLotteryDateByUid', p0, false, callback);
}
identityService.findUserBySiteName = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserBySiteName', p0, callback);
}
identityService.updateSendEmailCount = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateSendEmailCount', p0, callback);
}
identityService.saveOrUpdateThirdLoginUser = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveOrUpdateThirdLoginUser', p0, callback);
}
identityService.findUserByChannelId = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserByChannelId', p0, callback);
}
identityService.saveLastLoginDate = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLastLoginDate', false, callback);
}
identityService.saveUserForWizard = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserForWizard', p0, false, callback);
}
identityService.saveUserProTagFlag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserProTagFlag', p0, callback);
}
identityService.saveUserIntTagFlag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserIntTagFlag', p0, callback);
}
identityService.saveTimelineIDByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTimelineIDByUid', p0, false, callback);
}
identityService.findUserLotteryByUid = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserLotteryByUid', false, callback);
}
identityService.findAllUsersByPage = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllUsersByPage', p0, callback);
}
identityService.findAllFollowUsers = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllFollowUsers', p0, callback);
}
identityService.findUserPostSizeByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserPostSizeByUid', p0, callback);
}
identityService.addInitialTagGroupAndTags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addInitialTagGroupAndTags', p0, callback);
}
identityService.findFollowTaByTag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findFollowTaByTag', p0, false, callback);
}
identityService.updateInvitationFlag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateInvitationFlag', p0, callback);
}
identityService.findAllSuggestionPost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllSuggestionPost', p0, callback);
}
identityService.findUserMostPopularPostDetails = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserMostPopularPostDetails', p0, callback);
}
identityService.findUsersByUserIds = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUsersByUserIds', p0, callback);
}
identityService.findAllInvitationsByInviteflag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllInvitationsByInviteflag', p0, false, callback);
}
identityService.addSelfInvitation = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addSelfInvitation', p0, callback);
}
identityService.findGBDebugByUlink = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findGBDebugByUlink', p0, callback);
}
identityService.saveCommentVoting = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveCommentVoting', p0, false, callback);
}
identityService.findFollowTagByTa = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findFollowTagByTa', p0, false, callback);
}
identityService.findTimelineItemsByTLID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTimelineItemsByTLID', p0, callback);
}
identityService.findAllTagsByPage = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagsByPage', p0, callback);
}
identityService.findAllFollowPost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllFollowPost', p0, callback);
}
identityService.findAllPostByTagID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostByTagID', p0, callback);
}
identityService.findQuestionCountByUsertags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findQuestionCountByUsertags', p0, callback);
}
identityService.findUserTagsByUserTagID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserTagsByUserTagID', p0, callback);
}
identityService.findFollowStatusByUserID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findFollowStatusByUserID', p0, callback);
}
identityService.findAllPostSizeByTagID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostSizeByTagID', p0, callback);
}
identityService.updateInvitationCodeByEmail = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateInvitationCodeByEmail', p0, false, callback);
}
identityService.findAllTagGroupByCategoryID = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagGroupByCategoryID', callback);
}
identityService.findTimelineByTLIDandUID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTimelineByTLIDandUID', p0, false, callback);
}
identityService.findAllTagsByFunctionflag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagsByFunctionflag', p0, callback);
}
identityService.findAllUnReadActivities = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllUnReadActivities', p0, false, callback);
}
identityService.findAllActivitiesInPageByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllActivitiesInPageByUid', p0, false, callback);
}
identityService.addTagGroupAndTags = function(p0, p1, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTagGroupAndTags', p0, p1, callback);
}
identityService.findUserPostByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserPostByUid', p0, callback);
}
identityService.findAllTagsByCategoryTags = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagsByCategoryTags', callback);
}
identityService.findAllSuggestionPostSize = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllSuggestionPostSize', p0, callback);
}
identityService.deleteTimelineItemByTLID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'deleteTimelineItemByTLID', p0, false, callback);
}
identityService.findAllPostTagByPostID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostTagByPostID', p0, callback);
}
identityService.findUserTagsByUID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserTagsByUID', p0, callback);
}
identityService.findFunctionUserTagsByUids = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findFunctionUserTagsByUids', p0, callback);
}
identityService.findAllPostSizeByUserTagID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostSizeByUserTagID', p0, callback);
}
identityService.findAllPostByTagIDAndUID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostByTagIDAndUID', p0, callback);
}
identityService.findPostsByShareLink = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findPostsByShareLink', p0, callback);
}
identityService.findUserPostSizeByFunctionTags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserPostSizeByFunctionTags', p0, callback);
}
identityService.resendInvitationMail = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'resendInvitationMail', p0, callback);
}
identityService.findTimelineByTLID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTimelineByTLID', p0, callback);
}
identityService.findAllFollowPostSize = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllFollowPostSize', p0, callback);
}
identityService.findAllPostsRelatedToOnePost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostsRelatedToOnePost', p0, callback);
}
identityService.savePostViewCount = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'savePostViewCount', p0, callback);
}
identityService.findInvitationByCode = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findInvitationByCode', p0, callback);
}
identityService.findCreateTagsByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findCreateTagsByUid', p0, callback);
}
identityService.findAllPostByTagName = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostByTagName', p0, callback);
}
identityService.findAllPostByUserTagID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostByUserTagID', p0, callback);
}
identityService.findAllFavoritePost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllFavoritePost', p0, callback);
}
identityService.findAllCommentsByTutorialID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllCommentsByTutorialID', p0, callback);
}
identityService.findFollowTagsByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findFollowTagsByUid', p0, callback);
}
identityService.findInvitationByEmail = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findInvitationByEmail', p0, callback);
}
identityService.findUserByFullname = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserByFullname', p0, callback);
}
identityService.findAllCommentsByCodeReplayID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllCommentsByCodeReplayID', p0, callback);
}
identityService.findAllCommentVotingByCID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllCommentVotingByCID', p0, callback);
}
identityService.findAllCommentsByPostID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllCommentsByPostID', p0, callback);
}
identityService.deleteCommentReply = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'deleteCommentReply', p0, false, callback);
}
identityService.findAllTagsByPostCount = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagsByPostCount', callback);
}
identityService.findAllQuestionPostByUserTags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllQuestionPostByUserTags', p0, callback);
}
identityService.findUserTagFollowByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserTagFollowByUid', p0, false, callback);
}
identityService.saveUserTagFollow = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserTagFollow', p0, false, callback);
}
identityService.findAllTagsByOfficial = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagsByOfficial', p0, callback);
}
identityService.saveFavoritePostUnDeleted = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveFavoritePostUnDeleted', p0, false, callback);
}
identityService.addRequestLiveClass = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addRequestLiveClass', p0, false, callback);
}
identityService.findAllCodeReplays4Interview = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllCodeReplays4Interview', p0, callback);
}
identityService.findAllTutorialRecordsByCRID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTutorialRecordsByCRID', p0, callback);
}
identityService.findAllPostGroups = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostGroups', callback);
}
identityService.findAllMyTrainingTopics = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllMyTrainingTopics', p0, callback);
}
identityService.findTrainingTopicBySTTID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTrainingTopicBySTTID', p0, callback);
}
identityService.findAllCodeReplaysByKeyword = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllCodeReplaysByKeyword', p0, callback);
}
identityService.findAllApprovingLibraries = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllApprovingLibraries', p0, callback);
}
identityService.findAllLibrariesByTrack = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibrariesByTrack', p0, callback);
}
identityService.findTutorialReplayByCRPID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTutorialReplayByCRPID', p0, callback);
}
identityService.addGBTutorialExcercise = function(p0, p1, p2, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addGBTutorialExcercise', p0, p1, p2, false, callback);
}
identityService.findAllTrainingWaresByStcid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTrainingWaresByStcid', p0, callback);
}
identityService.addTrainingRegister = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTrainingRegister', p0, false, callback);
}
identityService.findAllTrainingCalendarItems = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTrainingCalendarItems', callback);
}
identityService.findAllPostGroupPostsByPGID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostGroupPostsByPGID', p0, callback);
}
identityService.findAllPostGroupPostsByPostID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostGroupPostsByPostID', p0, callback);
}
identityService.findPPTItemsByPPTID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findPPTItemsByPPTID', p0, callback);
}
identityService.findLibraryByLibID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findLibraryByLibID', p0, callback);
}
identityService.saveLibraryReplayDeletedByslrid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLibraryReplayDeletedByslrid', p0, false, callback);
}
identityService.findPPTItemByPIID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findPPTItemByPIID', p0, callback);
}
identityService.findAllLibraryInProgressByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibraryInProgressByUid', p0, callback);
}
identityService.saveCodeReplayDeletedByCRPID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveCodeReplayDeletedByCRPID', p0, false, callback);
}
identityService.findAllLibraryreplay = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibraryreplay', p0, callback);
}
identityService.findAllLibraryReplayByUIDAndLRID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibraryReplayByUIDAndLRID', p0, callback);
}
identityService.findAllTutorialReplaysByKeyword = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTutorialReplaysByKeyword', p0, callback);
}
identityService.addLibraryProgress = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addLibraryProgress', p0, false, callback);
}
identityService.findAllWallPapers = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllWallPapers', p0, false, callback);
}
identityService.saveTrainingClass = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTrainingClass', p0, false, callback);
}
identityService.saveRequestLibrary = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveRequestLibrary', p0, false, callback);
}
identityService.saveTrainingCalendarByStcid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTrainingCalendarByStcid', p0, false, callback);
}
identityService.saveLibraryReplayItemSort = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLibraryReplayItemSort', p0, false, callback);
}
identityService.findPostGroupByPostID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findPostGroupByPostID', p0, callback);
}
identityService.findAllTrainingTopics = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTrainingTopics', p0, callback);
}
identityService.findTrainingWaresBySttwid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTrainingWaresBySttwid', p0, callback);
}
identityService.findMyFavCodeReplays = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findMyFavCodeReplays', p0, callback);
}
identityService.findMessagesByFromUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findMessagesByFromUid', p0, false, callback);
}
identityService.findCodeReplayByCRPID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findCodeReplayByCRPID', p0, callback);
}
identityService.findAllMessageByFuidAndTuid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllMessageByFuidAndTuid', p0, false, callback);
}
identityService.findFavoriteByPIDandUID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findFavoriteByPIDandUID', p0, callback);
}
identityService.saveFavFlagBySttwid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveFavFlagBySttwid', p0, false, callback);
}
identityService.saveTrainingWareDeleted = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTrainingWareDeleted', p0, false, callback);
}
identityService.findAllMyTrainingTopicsNOTInPage = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllMyTrainingTopicsNOTInPage', p0, callback);
}
identityService.findAllMyEnrolledTrainingTopic = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllMyEnrolledTrainingTopic', p0, callback);
}
identityService.findTrainingCalendarItemsBytcid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTrainingCalendarItemsBytcid', p0, callback);
}
identityService.saveViewCountByPPTID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveViewCountByPPTID', p0, false, callback);
}
identityService.saveCodeReplayViewCountByCRPID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveCodeReplayViewCountByCRPID', p0, callback);
}
identityService.saveCodeReplayPickupByCRPID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveCodeReplayPickupByCRPID', p0, false, callback);
}
identityService.addRTCollabrationAlert = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addRTCollabrationAlert', p0, false, callback);
}
identityService.findAllPostGroupsByPage = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostGroupsByPage', p0, callback);
}
identityService.addTutorialRecords = function(p0, p1, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTutorialRecords', p0, p1, callback);
}
identityService.deletePPTItemByPPTID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'deletePPTItemByPPTID', p0, false, callback);
}
identityService.saveLibraryDeleted = function(p0, p1, p2, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLibraryDeleted', p0, p1, p2, false, callback);
}
identityService.findAllLibrariesWithLimit = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibrariesWithLimit', p0, callback);
}
identityService.findAllMyFavLibraries = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllMyFavLibraries', p0, callback);
}
identityService.findTrainingTopicBySTCID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTrainingTopicBySTCID', p0, callback);
}
identityService.saveCodeReplayByCRPID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveCodeReplayByCRPID', p0, false, callback);
}
identityService.saveTutorialReplayByCRPID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTutorialReplayByCRPID', p0, false, callback);
}
identityService.findAllDraftLibraries = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllDraftLibraries', p0, callback);
}
identityService.findAllCodeRecordsByCRID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllCodeRecordsByCRID', p0, callback);
}
identityService.saveFavoritePostDeleted = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveFavoritePostDeleted', p0, false, callback);
}
identityService.findMessageCountByLastlogon = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findMessageCountByLastlogon', p0, callback);
}
identityService.addTrainingCalendar = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTrainingCalendar', p0, false, callback);
}
identityService.findPostGroupByPGID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findPostGroupByPGID', p0, callback);
}
identityService.updateFinishOrder = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateFinishOrder', p0, callback);
}
identityService.saveUserToPayMent = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserToPayMent', p0, false, callback);
}
identityService.saveRoleAdminForAdmin = function(p0, p1, p2, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveRoleAdminForAdmin', p0, p1, p2, false, callback);
}
identityService.updateLibraryTrackById = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateLibraryTrackById', p0, false, callback);
}
identityService.findAllOrdersWithUser = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllOrdersWithUser', p0, callback);
}
identityService.findAllTrackByTrackType = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTrackByTrackType', p0, callback);
}
identityService.updateSendEmailCountByMail = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateSendEmailCountByMail', p0, callback);
}
identityService.findLibraryTrackByTrackName = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findLibraryTrackByTrackName', p0, callback);
}
identityService.findLibraryTrackById = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findLibraryTrackById', p0, callback);
}
identityService.findAllTrainingCamp = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTrainingCamp', callback);
}
identityService.findLatestGetLotteryUser = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findLatestGetLotteryUser', false, callback);
}
identityService.findAllOrdersByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllOrdersByUid', p0, false, callback);
}
identityService.findAllUsersByPageForAdmin = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllUsersByPageForAdmin', p0, callback);
}
identityService.findCoinExistedByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findCoinExistedByUid', p0, callback);
}
identityService.saveCoinSpendByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveCoinSpendByUid', p0, callback);
}
identityService.responseMessageInfo = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'responseMessageInfo', p0, false, callback);
}
identityService.findOffersByOfferType = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findOffersByOfferType', p0, callback);
}
identityService.findAllLibrarysByTrackId = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibrarysByTrackId', p0, callback);
}
identityService.updatePublishStatus = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updatePublishStatus', p0, false, callback);
}
identityService.updateRefundStatus = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateRefundStatus', p0, false, callback);
}
identityService.getTargetClass = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getTargetClass', callback);
}
identityService.findAllTagsSize = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagsSize', p0, callback);
}
identityService.addUserTag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addUserTag', p0, false, callback);
}
identityService.addUser = function(p0, p1, p2, p3, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addUser', p0, p1, p2, p3, callback);
}
identityService.findAllUsersSize = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllUsersSize', p0, callback);
}
identityService.savePassword = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'savePassword', p0, false, callback);
}
identityService.addComment = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addComment', p0, false, callback);
}
identityService.getAllUser = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getAllUser', callback);
}
identityService.viewPost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'viewPost', p0, callback);
}
identityService.addInvitation = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addInvitation', p0, callback);
}
identityService.findAllTags = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTags', callback);
}
identityService.addTagGroup = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTagGroup', p0, callback);
}
identityService.findAllPost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPost', p0, callback);
}
identityService.saveUserMobile = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserMobile', p0, false, callback);
}
identityService.addTag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTag', p0, false, callback);
}
identityService.findTagByTID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTagByTID', p0, callback);
}
identityService.findMyFanByTags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findMyFanByTags', p0, false, callback);
}
identityService.addUserTagFollow = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addUserTagFollow', p0, false, callback);
}
identityService.findMyTagsByFan = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findMyTagsByFan', p0, false, callback);
}
identityService.addGBDebug = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addGBDebug', p0, callback);
}
identityService.verifyPwd = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'verifyPwd', p0, false, callback);
}
identityService.findUserByMail = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserByMail', p0, callback);
}
identityService.deleteUser = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'deleteUser', p0, callback);
}
identityService.saveUserAvatar = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserAvatar', p0, false, callback);
}
identityService.addPost = function(p0, p1, p2, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addPost', p0, p1, p2, false, callback);
}
identityService.findAllExistTags = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllExistTags', callback);
}
identityService.addTagGroupTag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTagGroupTag', p0, callback);
}
identityService.addRegisterUser = function(p0, p1, p2, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addRegisterUser', p0, p1, p2, callback);
}
identityService.saveSiteName = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveSiteName', p0, false, callback);
}
identityService.findAllDraftPost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllDraftPost', p0, callback);
}
identityService.deletePost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'deletePost', p0, false, callback);
}
identityService.findAllTagsByUID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagsByUID', p0, callback);
}
identityService.findAllPostSize = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPostSize', callback);
}
identityService.saveUser = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUser', p0, false, callback);
}
identityService.saveTag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTag', p0, false, callback);
}
identityService.getAllRCTeachers = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getAllRCTeachers', p0, callback);
}
identityService.saveMailVericode = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveMailVericode', p0, callback);
}
identityService.findUserByPhone = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findUserByPhone', p0, callback);
}
identityService.savePost = function(p0, p1, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'savePost', p0, p1, false, callback);
}
identityService.saveTagOfficial = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTagOfficial', p0, false, callback);
}
identityService.getOtherUserInfo = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getOtherUserInfo', p0, false, callback);
}
identityService.findTagByTagName = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTagByTagName', p0, callback);
}
identityService.saveUserBaseInfo = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveUserBaseInfo', p0, false, callback);
}
identityService.savePPTStatus = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'savePPTStatus', p0, false, callback);
}
identityService.saveOrder = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveOrder', p0, false, callback);
}
identityService.findTrackById = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTrackById', p0, callback);
}
identityService.findAllLibraries = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibraries', p0, callback);
}
identityService.addTimelineItem = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTimelineItem', p0, false, callback);
}
identityService.addToFavorite = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addToFavorite', p0, false, callback);
}
identityService.savePPTItemSort = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'savePPTItemSort', p0, false, callback);
}
identityService.savePPT = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'savePPT', p0, false, callback);
}
identityService.updateTrack = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateTrack', p0, false, callback);
}
identityService.saveReadActivity = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveReadActivity', false, callback);
}
identityService.saveLibrary = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLibrary', p0, false, callback);
}
identityService.findAllPPTs = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPPTs', p0, callback);
}
identityService.findAllCoinByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllCoinByUid', p0, callback);
}
identityService.addCodeReplay = function(p0, p1, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addCodeReplay', p0, p1, false, callback);
}
identityService.addPPTItem = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addPPTItem', p0, false, callback);
}
identityService.updateOrder = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'updateOrder', p0, callback);
}
identityService.deleteTrackById = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'deleteTrackById', p0, false, callback);
}
identityService.findAllPPTsByUID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllPPTsByUID', p0, callback);
}
identityService.addPPT = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addPPT', p0, false, callback);
}
identityService.addLibrary = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addLibrary', p0, false, callback);
}
identityService.addTimeline = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTimeline', p0, false, callback);
}
identityService.addLibraryReplay = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addLibraryReplay', p0, false, callback);
}
identityService.findOrderById = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findOrderById', p0, false, callback);
}
identityService.savePPTItem = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'savePPTItem', p0, false, callback);
}
identityService.addMessage = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addMessage', p0, false, callback);
}
identityService.saveLibTrack = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLibTrack', p0, false, callback);
}
identityService.addFavoritePost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addFavoritePost', p0, false, callback);
}
identityService.addPostGroupPost = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addPostGroupPost', p0, callback);
}
identityService.findMyTimelines = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findMyTimelines', p0, false, callback);
}
identityService.addTrainingClass = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTrainingClass', p0, false, callback);
}
identityService.findAllMyPPTs = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllMyPPTs', false, callback);
}
identityService.addWallpaper = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addWallpaper', p0, false, callback);
}
identityService.addAdminMessage = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addAdminMessage', p0, false, callback);
}
identityService.addTrainingWare = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addTrainingWare', p0, false, callback);
}
identityService.findPPTByPPTID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findPPTByPPTID', p0, callback);
}
identityService.saveTrack = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTrack', p0, false, callback);
}
identityService.findAllTimelines = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTimelines', p0, false, callback);
}
identityService.addPostGroup = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addPostGroup', p0, false, callback);
}
identityService.findPPTByPIID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findPPTByPIID', p0, callback);
}
identityService.savePostGroup = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'savePostGroup', p0, false, callback);
}
identityService.addGBTutorial = function(p0, p1, p2, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addGBTutorial', p0, p1, p2, false, callback);
}
identityService.findAllQuestionPostByUserDarenTags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllQuestionPostByUserDarenTags', p0, callback);
}
identityService.findAllQuestionPostSizeByUserTags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllQuestionPostSizeByUserTags', p0, callback);
}
identityService.findSuggestionPostCountByFunctionTags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findSuggestionPostCountByFunctionTags', p0, callback);
}
identityService.findAllTypeActivitiesWithinOneHour = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTypeActivitiesWithinOneHour', p0, callback);
}
identityService.findMostPopularPostDetailsWithinOneMonth = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findMostPopularPostDetailsWithinOneMonth', p0, callback);
}
identityService.findAllNewPostGroupByUserLastLogon = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllNewPostGroupByUserLastLogon', p0, callback);
}
identityService.saveResetPasswordByFullnameAndEmail = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveResetPasswordByFullnameAndEmail', p0, callback);
}
identityService.findAllTypeActivitiesWithinOneWeek = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTypeActivitiesWithinOneWeek', p0, false, callback);
}
identityService.findSpecifiedUserAllTrainingWaresByFavflag = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findSpecifiedUserAllTrainingWaresByFavflag', p0, callback);
}
identityService.findMostPopularPostWithinOneMonth = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findMostPopularPostWithinOneMonth', p0, callback);
}
identityService.findAllRecommendUsersForLoginUser = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllRecommendUsersForLoginUser', p0, callback);
}
identityService.findAllQuestionPostSizeByUserDarenTags = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllQuestionPostSizeByUserDarenTags', p0, callback);
}
identityService.findAllTagGroupByCategoryIDAndUID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTagGroupByCategoryIDAndUID', p0, callback);
}
identityService.findCountAllTypeActivitiesWithinOneWeek = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findCountAllTypeActivitiesWithinOneWeek', p0, callback);
}
identityService.findFollowAndTagsFanAndTagsSizeByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findFollowAndTagsFanAndTagsSizeByUid', p0, callback);
}
identityService.findAllTrainingCalendarItemsByTopicID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTrainingCalendarItemsByTopicID', p0, callback);
}
identityService.saveLibraryProgressDeletedByUIDAndLIBID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLibraryProgressDeletedByUIDAndLIBID', p0, false, callback);
}
identityService.saveLibraryReplayExcerciseDeletedByslreid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveLibraryReplayExcerciseDeletedByslreid', p0, false, callback);
}
identityService.findAllEnrollTrainingCalendarCount = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllEnrollTrainingCalendarCount', p0, callback);
}
identityService.findAllTrainingCalendarItemsNotHappened = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTrainingCalendarItemsNotHappened', callback);
}
identityService.findAllMyEnrolledTrainingTopicForMyCalendar = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllMyEnrolledTrainingTopicForMyCalendar', p0, callback);
}
identityService.saveTrainingRegisterDeletedByStrid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTrainingRegisterDeletedByStrid', p0, false, callback);
}
identityService.findAllLastLoginUsersByPageForAdmin = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLastLoginUsersByPageForAdmin', p0, callback);
}
identityService.findAllAvailableTrainingCalendarCount = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllAvailableTrainingCalendarCount', callback);
}
identityService.saveTutorialReplayViewCountByCRPID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'saveTutorialReplayViewCountByCRPID', p0, callback);
}
identityService.findTrainingRegisterByTopicIDandStudentID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findTrainingRegisterByTopicIDandStudentID', p0, callback);
}
identityService.findAllTrainingRegisterItemsByCalendarID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllTrainingRegisterItemsByCalendarID', p0, callback);
}
identityService.findAllLibraryInProgressWithLimitByUid = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibraryInProgressWithLimitByUid', p0, callback);
}
identityService.findAllUserEnrolledWithSpecifiedCourse = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllUserEnrolledWithSpecifiedCourse', p0, callback);
}
identityService.findAllLibraryReplayExcerciseByTUID = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'findAllLibraryReplayExcerciseByTUID', p0, callback);
}
identityService.addAdvisor = function(p0, p1, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addAdvisor', p0, p1, callback);
}
identityService.addAdvisor = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addAdvisor', p0, callback);
}
identityService.isExposeProxy = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'isExposeProxy', callback);
}
identityService.setExposeProxy = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'setExposeProxy', p0, callback);
}
identityService.setTargetSource = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'setTargetSource', p0, callback);
}
identityService.isProxyTargetClass = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'isProxyTargetClass', callback);
}
identityService.setPreFiltered = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'setPreFiltered', p0, callback);
}
identityService.isPreFiltered = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'isPreFiltered', callback);
}
identityService.getAdvisors = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getAdvisors', callback);
}
identityService.removeAdvisor = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'removeAdvisor', p0, callback);
}
identityService.removeAdvisor = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'removeAdvisor', p0, callback);
}
identityService.replaceAdvisor = function(p0, p1, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'replaceAdvisor', p0, p1, callback);
}
identityService.removeAdvice = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'removeAdvice', p0, callback);
}
identityService.getTargetSource = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getTargetSource', callback);
}
identityService.addAdvice = function(p0, p1, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addAdvice', p0, p1, callback);
}
identityService.addAdvice = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'addAdvice', p0, callback);
}
identityService.toProxyConfigString = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'toProxyConfigString', callback);
}
identityService.getProxiedInterfaces = function(callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getProxiedInterfaces', callback);
}
identityService.isInterfaceProxied = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'isInterfaceProxied', p0, callback);
}
identityService.isProxyClass = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'isProxyClass', p0, callback);
}
identityService.newProxyInstance = function(p0, p1, p2, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'newProxyInstance', p0, p1, p2, callback);
}
identityService.getInvocationHandler = function(p0, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getInvocationHandler', p0, callback);
}
identityService.getProxyClass = function(p0, p1, callback) {
  dwr.engine._execute(identityService._path, 'identityService', 'getProxyClass', p0, p1, callback);
}
