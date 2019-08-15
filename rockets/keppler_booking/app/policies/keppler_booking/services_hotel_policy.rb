module KepplerBooking
  # Policy for ServicesHotel model
  class ServicesHotelPolicy < ControllerPolicy
    attr_reader :user, :objects

    def initialize(user, objects)
      @user = user
      @objects = objects
    end
  end
end