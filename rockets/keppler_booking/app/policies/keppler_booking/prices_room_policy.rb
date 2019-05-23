module KepplerBooking
  # Policy for PricesRoom model
  class PricesRoomPolicy < ControllerPolicy
    attr_reader :user, :objects

    def initialize(user, objects)
      @user = user
      @objects = objects
    end
  end
end